<?php

namespace App\Controllers;

use App\Models\Users;

class LoginController extends CoreController
{
    public function login() {
        $this->showAdmin( 'pages/loginA' );
    }

    public function logout() {}

    public function loginPost() {

        $user = Users::findByEmail( $_POST['email'] );

        if ( $user === null )
        {
            echo 'Identifiants incorrects';
        }
        else {
            if( hash('sha256', $pass ) == $mdp )
            {
                dump('OK');
            }
            else { dump('PAS OK'); }
        }
    }
}