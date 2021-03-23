<?php

namespace App\Models;

use App\Tools\Database;

class Hero extends CoreModel
{
    public static $table = "hero";

    // Proprietes

    protected $picture;
    protected $title_a;
    protected $subtitle_a;
    protected $description_a;
    protected $title_b;
    protected $subtitle_b;
    protected $description_b;
    
    //===============================
    // Method
    //===============================

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of title_a
     */
    public function getTitleA()
    {
        return $this->title_a;
    }

    /**
     * Set the value of title_a
     *
     * @return  self
     */
    public function setTitleA($title_a)
    {
        $this->title_a = $title_a;

        return $this;
    }

    /**
     * Get the value of subtitle_a
     */
    public function getSubtitleA()
    {
        return $this->subtitle_a;
    }

    /**
     * Set the value of subtitle_a
     *
     * @return  self
     */
    public function setSubtitleA($subtitle_a)
    {
        $this->subtitle_a = $subtitle_a;

        return $this;
    }

    /**
     * Get the value of description_a
     */
    public function getDescriptionA()
    {
        return $this->description_a;
    }

    /**
     * Set the value of description_a
     *
     * @return  self
     */
    public function setDescriptionA($description_a)
    {
        $this->description_a = $description_a;

        return $this;
    }

    /**
     * Get the value of title_b
     */
    public function getTitleB()
    {
        return $this->title_b;
    }

    /**
     * Set the value of title_b
     *
     * @return  self
     */
    public function setTitleB($title_b)
    {
        $this->title_b = $title_b;

        return $this;
    }

    /**
     * Get the value of subtitle_b
     */
    public function getSubtitleB()
    {
        return $this->subtitle_b;
    }

    /**
     * Set the value of subtitle_b
     *
     * @return  self
     */
    public function setSubtitleB($subtitle_b)
    {
        $this->subtitle_b = $subtitle_b;

        return $this;
    }

    /**
     * Get the value of description_b
     */
    public function getDescriptionB()
    {
        return $this->description_b;
    }

    /**
     * Set the value of description_b
     *
     * @return  self
     */
    public function setDescriptionB($description_b)
    {
        $this->description_b = $description_b;

        return $this;
    }
}