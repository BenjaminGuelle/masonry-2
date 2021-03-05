<?php

namespace App\Controllers;

class AdminController extends CoreController
{
    public function admin() {
        $this->showAdmin( 'pages/homeA' );
    }
}