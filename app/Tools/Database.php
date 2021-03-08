<?php

    namespace App\Tools;    

    class Database 
    {
        private $dbh;
        private $errorsDate = [];
        private $errorsNumber = 5;
        private $maxTime = 10;
        private $message;
        private static $_instance;
        private function __construct() {
            // Récupération des données du fichier de config
            $configData = parse_ini_file(__DIR__.'/../config.ini');
            
            try {
                $this->dbh = new \PDO(
                    "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                    $configData['DB_USERNAME'],
                    $configData['DB_PASSWORD'],
                    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
                );
                $this->message = 'Connexion database réussie';
            }
            catch(\Exception $exception) {
                $errorsDate.push(time());
                //2 : send log
                $this->message = 'Erreur de connexion database';
                exit;
            }
        }
        // the unique method you need to use
        public static function getPDO() {
            if ($this->verifyErrors() === false)
            {
                return null;
            }
            // If no instance => create one
            if (empty(self::$_instance)) {
                self::$_instance = new \App\Tools\Database();
            }
            if ( !isset(self::$_instance->dbh) )
            {
                return null;
            }
            return self::$_instance->dbh;
        }

        public function getConnexionStatus() {
            return $this->message;
        }

        public function verifyErrors() 
        {
            if ($this->errorsDate.length < $this->errorsNumber) {
                return true;
            }
            else { 
                if ( $this->errorsDate[$this->errorsDate.length - $this->errorsNumber ] + $this->maxTime < end($this->errorsDate) )
                {
                    return true;
                }
                else return false;
            }
        }

    }