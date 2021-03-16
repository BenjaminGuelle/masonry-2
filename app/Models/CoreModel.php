<?php

    namespace App\Models;

    use App\Tools\Database;

    abstract class CoreModel
    {
        public static $table;

        protected $id;
        protected $created_at;
        protected $updated_at;

        public function __construct(array $_modelFromDB = [])
        {
            foreach( $_modelFromDB as $att_name => $att_value )
            {
                $this->{$att_name} = $att_value;
            };
        }

        //===============================
        // Method
        //===============================

        /*******
         * @function find intem by id
         * @param int
         */
        public static function findById( int $_id) 
        {
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

        /**
         * @function find all item in table
         * 
         */
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

        /**
         * @function insert item to DB
         */
        public function insert() 
        {
            $pdo = Database::getPDO();
            $this_arr = get_object_vars( $this );
            unset( $this_arr['id'] );
            unset( $this_arr['updated_at'] );
    
            // key
            $fields_arr = array_keys($this_arr);
            $fields_str = implode( "`, `", $fields_arr );
    
            // values
            $values_arr = array_fill( 0, count( $fields_arr ), "?" );
            $values_str = implode( ", ", $values_arr );
    
            $prepared = $pdo->prepare( 
                "INSERT INTO `". static::$table ."` (`".$fields_str."`) VALUES (".$values_str.")" 
            );
    
            $values = array_values( $this_arr );
    
            $insertRows = $prepared->execute($values);
            if ( $insertRows > 0 ) {
                $this->id = $pdo->lastInsertId();
                return true;
            }
            else return false;
        }

        /**
         * @function edit item to DB
         */
        public function update() 
        {
            $pdo = Database::getPDO();
            $userUpdate = get_object_vars( $this );
            unset( $userUpdate['id'] );
            unset( $userUpdate['updated_at'] );
    
            $set_arr = [];
            foreach ( $userUpdate as $field => $values ) {
                $set_arr[] = '`'.$field . "` = ?";
            }
            $set_str = implode(', ', $set_arr);
    
            $prepared = $pdo->prepare(
                "UPDATE `". static::$table ."` SET ".$set_str." WHERE `id` = {$this->id}"
            );
    
            $values = array_values($userUpdate);
            
            $insertRows = $prepared->execute($values);
            if ( $insertRows > 0 ) {
                return true;
            }
            else return false;
        }

        /**
         * @function delete item to DB
         */
        public function delete()
        {
            $pdo = Database::getPDO();
            $prepared = $pdo->prepare( 
                "DELETE FROM `". static::$table ."` WHERE `id` = ?"
            );
            $updatedRows = $prepared->execute( [ $this->id ] );
            return ( $updatedRows > 0 );
        }

        //===============================
        // Getters
        //===============================
        public function getId() { return $this->id; }
        public function getCreatedAt() { return $this->created_at; }
        public function getUpdatedAt() { return $this->updated_at; }

         //===============================
        // Setters
        //===============================
        public function setId( string $_id ) { $this->id = $_id; }
        public function setCreateddAt( string $_createdAt ) { $this->created_at = $_createdAt; }
        public function setUpdatedAt( string $_updatedAt ) { $this->updated_at = $_updatedAt; }
    }