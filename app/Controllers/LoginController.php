<?php

namespace App\Controllers;

class LoginController extends CoreController
{
    public function login() {
        $this->showAdmin( 'pages/loginA' );
    }
}