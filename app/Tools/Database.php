<?php

    namespace App\Tools;    

    use App\Controllers\CoreController;

    class Database 
    {
        private $dbh;
        private static $errorsDate = [];
        private static $errorsNumber = 5;
        private static $maxTime = 10;
        private static $message;
        private static $_instance;

        private $DB_HOST;
        private $DB_NAME;
        private $DB_USERNAME;
        private $DB_PASSWORD;
        private $DB_PORT;
        
        private function __construct() {
            logEvent('ini config ini');
            foreach ( CoreController::getConfigVar() as $att_name => $att_value )
            {
                $this->{$att_name} = $att_value;
            };

            // Récupération des données du fichier de config
            try {
                logEvent('TRY PDO');
                $this->dbh = new \PDO(
                    "mysql:host={$this->getDB_HOST()};port={$this->getDB_PORT()};dbname={$this->getDB_NAME()};charset=utf8",
                    $this->getDB_USERNAME(),
                    $this->getDB_PASSWORD(),
                    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
                );
                // self::message = 'Connexion database réussie';
            }
            catch(\Exception $exception) {
                /*self::errorsDate.push(time());*/
                logError(print_r($exception));
                //2 : send log
                // self::message = 'Erreur de connexion database';
                exit;
            }
        }
        // the unique method you need to use
        public static function getPDO() {
            logEvent('GET PDO');
            
            // if (self::verifyErrors() === false)
            // {
            //     return null;
            // }
            // If no instance => create one
            if (empty(self::$_instance)) {
                logEvent('instance EMPTY');
                self::$_instance = new \App\Tools\Database();
            }
            if ( !isset(self::$_instance->dbh) )
            {
                logEvent('instance NOT SET');
                return null;
            }
            logEvent('instance SUCCESs');
            return self::$_instance->dbh;
        }

        public function getConnexionStatus() {
            return self::message;
        }

        private static function verifyErrors() 
        {
            if (self::errorsDate.length < self::errorsNumber) {
                return true;
            }
            else { 
                if ( self::errorsDate[self::errorsDate.length - self::errorsNumber ] + self::maxTime < end(self::errorsDate) )
                {
                    return true;
                }
                else return false;
            }
        }
        
        public static function string() {
            return 'mon super string rose';
        }

        //===============================
        // Getters
        //===============================

        public function getDB_HOST() { return $this->DB_HOST; }
        public function getDB_NAME() { return $this->DB_NAME; }
        public function getDB_USERNAME() { return $this->DB_USERNAME; }
        public function getDB_PASSWORD() { return $this->DB_PASSWORD; }
        public function getDB_PORT() { return $this->DB_PORT; }

        //===============================
        // Setters
        //===============================

        public function setDB_HOST( string $_DB_HOST ) { $this->DB_HOST = $_DB_HOST; }
        public function setDB_NAME( string $_DB_NAME ) { $this->DB_NAME = $_DB_NAME; }
        public function setDB_USERNAME( string $_DB_USERNAME  ) { $this->DB_USERNAME = $_DB_USERNAME; }
        public function setDB_PASSWORD( string $_DB_PASSWORD ) { $this->DB_PASSWORD = $_DB_PASSWORD; }

    }