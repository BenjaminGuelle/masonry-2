<?php

namespace App\Models;

use App\Tools\Database;

class Presentation extends CoreModel
{
    public static $table = "presentation";

    // Proprietes

    protected $title;
    protected $subTitle;
    protected $description;
    protected $case_a;
    protected $case_a_txt;
    protected $case_b;
    protected $case_b_txt;
    protected $case_c;
    protected $case_c_txt;
    protected $picture;
    
    //===============================
    // Method
    //===============================

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of subTitle
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set the value of subTitle
     *
     * @return  self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of case_a
     */
    public function getCaseA()
    {
        return $this->case_a;
    }

    /**
     * Set the value of case_a
     *
     * @return  self
     */
    public function setCaseA($case_a)
    {
        $this->case_a = $case_a;

        return $this;
    }

    /**
     * Get the value of case_a_txt
     */
    public function getCaseATxt()
    {
        return $this->case_a_txt;
    }

    /**
     * Set the value of case_a_txt
     *
     * @return  self
     */
    public function setCaseATxt($case_a_txt)
    {
        $this->case_a_txt = $case_a_txt;

        return $this;
    }

    /**
     * Get the value of case_b
     */
    public function getCaseB()
    {
        return $this->case_b;
    }

    /**
     * Set the value of case_b
     *
     * @return  self
     */
    public function setCaseB($case_b)
    {
        $this->case_b = $case_b;

        return $this;
    }

    /**
     * Get the value of case_b_txt
     */
    public function getCaseBTxt()
    {
        return $this->case_b_txt;
    }

    /**
     * Set the value of case_b_txt
     *
     * @return  self
     */
    public function setCaseBTxt($case_b_txt)
    {
        $this->case_b_txt = $case_b_txt;

        return $this;
    }

    /**
     * Get the value of case_c
     */
    public function getCaseC()
    {
        return $this->case_c;
    }

    /**
     * Set the value of case_c
     *
     * @return  self
     */
    public function setCaseC($case_c)
    {
        $this->case_c = $case_c;

        return $this;
    }

    /**
     * Get the value of case_c_txt
     */
    public function getCaseCTxt()
    {
        return $this->case_c_txt;
    }

    /**
     * Set the value of case_c_txt
     *
     * @return  self
     */
    public function setCaseCTxt($case_c_txt)
    {
        $this->case_c_txt = $case_c_txt;

        return $this;
    }

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
}
    