<?php

namespace App\Models;

use App\Tools\Database;

class Presentation extends CoreModel
{
    public static $table = "presentation";

    // Proprietes

    protected $id;
    protected $title;
    protected $subTitle;
    protected $description;
    protected $case_a;
    protected $case_a_txt;
    protected $case_b;
    protected $case_b_txt;
    protected $case_c;
    protected $case_c_txt;
    
    protected $created_at;
    protected $updated_at;

    //===============================
    // Method
    //===============================
   
    
}
    