<?php

namespace App\Models;

use App\Tools\Database;

class Users extends CoreModel
{
    public static $table = "users";

    // Proprietes

    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $role;

    //===============================
    // Method
    //===============================
    public static function findByEmail( string $_email )
    {
        try {
             $pdo = Database::getPDO();
    
            if ( $pdo === null ) {
                exit;
            };
    
            $sql = "SELECT * FROM `". static::$table ."` WHERE `email` = ?";
    
            $statement = $pdo->prepare($sql);
            $statement->execute([$_email]);
            $modelFromDB = $statement->fetch( \PDO::FETCH_ASSOC );
    
            if ( $modelFromDB === false ) :
                return false;
            endif;
    
            return new static($modelFromDB);
        }
        catch(\Exception $error) {
            logError(print_r($error));
        }
        
    }

    //===============================
    // Getters
    //===============================
    public function getFirstName() { return $this->firstName; }
    public function getLastName() { return $this->lastName; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }
    public function getRole() { return $this->role; }

    //===============================
    // Setters
    //===============================
    public function setFirstName( string $_firstName ) { $this->firstName = $_firstName; }
    public function setLastName( string $_lastName  ) { $this->lastName = $_lastName; }
    public function setEmail( string $_email ) { $this->email = $_email; }
    public function setPassword( string $_password ) { $this->password = $_password; }
    public function setRole( string $_role ) { $this->role = $_role; }
    
    

}
