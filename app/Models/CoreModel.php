<?php

    namespace App\Models;
    use App\Utils\Database;

    abstract class CoreModel
    {
        public function __construct(array $_modelFromDB = [])
        {
            foreach( $_modelFromDB as $att_name => $att_value )
            {
                $this->{$att_name} = $att_value;
            };
        }

        
    }