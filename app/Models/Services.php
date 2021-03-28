<?php

namespace App\Models;

use App\Tools\Database;

class Services extends CoreModel
{
    public static $table = "services";

    protected $name;

    // foreign keys
    protected $category_id;

    //====================
    //====== METHODS =====
    //====================



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

    /**
     * Get the value of category_id
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}