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
    protected $created_at;
    protected $updated_at;

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

    public static function findById( int $_id) {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `". static::$table ."` WHERE `id` = ?";

        $statement = $pdo->prepare($sql);
        $statement->execute([$_id]);
        $modelFromDB = $statement->fetch( \PDO::FETCH_ASSOC );

        if ( $modelFromDB === false ) :
            return static::$table." not found !";
        endif;

        return new static($modelFromDB);
    }

    public static function findAll() {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `". static::$table ."`";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $modelListFromDatabase = $statement->fetchAll( \PDO::FETCH_ASSOC );

        if( $modelListFromDatabase === false ) :
            exit( static::$table." not found !" );
        endif;

        $modelsArray = [];

        foreach( $modelListFromDatabase as $modelDataFromDatabase ) :
            $model = new static( $modelDataFromDatabase );
            $modelsArray[] = $model;
        endforeach;

        return $modelsArray;
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
    public function getCreatedAt() { return $this->created_at; }
    public function getUpdatedAt() { return $this->updated_at; }

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
