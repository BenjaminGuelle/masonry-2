<?php

namespace App\Models;

use App\Tools\Database;

class Category extends CoreModel
{
    public static $table = "category";

    protected $name;


    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}