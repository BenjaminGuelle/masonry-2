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
        dump($_POST['email']);
        $user = Users::findByEmail( $_POST['email'] );

        if ( $user === null )
        {
            echo 'Identifiants incorrects';
        }
        else {
            if( hash('sha256', saltPepperStr($_POST['password']) ) == $user->getPassword() )
            {
                dump('OK');
            }
            else { 
                dump(saltPepperStr($_POST['password']));
                dump('PAS OK'); 
            }
        }
    }
    
}