<?php

namespace App\Models;

use App\Tools\Database;

class Users extends CoreModel
{
    public static $table = "users";

    // Proprietes

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $role;
    protected $createdAt;
    protected $updatedAt;

    //===============================
    // Method
    //===============================

    public static function findByEmail( string $_email )
    {
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


    //===============================
    // Getters
    //===============================
    public function getId() { return $this->id; }
    public function getFirstName() { return $this->firstName; }
    public function getLastName() { return $this->lastName; }
    public function getEmail() { return $this->email; }
    public function getPassword() { return $this->password; }
    public function getRole() { return $this->role; }
    public function getCreatedAt() { return $this->createdAt; }
    public function getUpdatedAt() { return $this->updatedAt; }

    //===============================
    // Setters
    //===============================
    public function setId( string $_id ) { $this->id = $_id; }
    public function setFirstName( string $_name ) { $this->name = $_name; }
    public function setLastName( string $_name  ) { $this->name = $_name; }
    public function setEmail( string $_email ) { $this->email = $_email; }
    public function setPassword( string $_password ) { $this->password = $_password; }
    public function setRole( string $_role ) { $this->role = $_role; }
    public function setUpdatedAt( string $_updatedAt ) { $this->updatedAt = $_updatedAt; }


}
