<?php

namespace App\Controllers;

use App\Models\Users;

class LoginController extends CoreController
{
    public function login() {
        $this->showAdmin( 'pages/loginA' );
    }

    public function logout() {
        global $router;

        unset( $_SESSION['userId'] );
        unset( $_SESSION['userObject'] );

        header( "Location: " . $router->generate( 'admin-login' ) );
        exit();
    }

    public function loginPost() {
        global $router;

        $user = Users::findByEmail( $_POST['email'] );

        if ( $user === null )
        {
            echo 'Identifiants incorrects';
        }
        else {
            if( hash('sha256', saltPepperStr($_POST['password']) ) === $user->getPassword() )
            {
                $_SESSION['userId']     = $user->getId();
                $_SESSION['userObject'] = $user;
                redirectTo('admin');
                exit();
            }
            else { 
                echo "Identifiants incorrects !";
            }
        }
    }
    
}