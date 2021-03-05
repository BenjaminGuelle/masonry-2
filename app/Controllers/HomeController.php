<?php

namespace App\Controllers;

class HomeController extends CoreController
{
    public function home() {
        $this->show( 'pages/home' );
    }

    
}