<?php

namespace App\Controllers;

use App\Models\Users;

class LoginController extends CoreController
{
    public function login() {
        if ( isLoged() ) {
            exit(redirectTo('admin'));
        }
        $this->showAdmin( 'pages/loginA' );
    }

    public function logout() {
        global $router;

        unset( $_SESSION['userId'] );
        unset( $_SESSION['userObject'] );

        redirectTo('admin-login');
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
                
                exit(redirectTo('admin'));
            }
            else { 
                echo "Identifiants incorrects !";
            }
        }
    }
    
}