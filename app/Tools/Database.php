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
        private function __construct() {
            // Récupération des données du fichier de config
            try {
                $this->dbh = new \PDO(
                    "mysql:host={$CoreController::getConfigVar('DB_HOST')};dbname={$CoreController::getConfigVar('DB_NAME')};charset=utf8",
                    $CoreController::getConfigVar('DB_USERNAME'),
                    $CoreController::getConfigVar('DB_PASSWORD'),
                    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
                );
                // self::message = 'Connexion database réussie';
            }
            catch(\Exception $exception) {
                self::errorsDate.push(time());
                //2 : send log
                // self::message = 'Erreur de connexion database';
                exit;
            }
        }
        // the unique method you need to use
        public static function getPDO() {
            // if (self::verifyErrors() === false)
            // {
            //     return null;
            // }
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

    }