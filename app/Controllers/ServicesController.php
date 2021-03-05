<?php

namespace App\Controllers;

class ServicesController extends CoreController
{
    public function list() {
        $this->show( 'pages/services' );
    }

    
}