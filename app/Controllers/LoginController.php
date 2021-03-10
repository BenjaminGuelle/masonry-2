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

        $_SESSION['mailSave'] = $_SESSION['userObject']->getEmail();
        unset( $_SESSION['userId'] );
        unset( $_SESSION['userObject'] );

        $_SESSION['attempt'] = 'Vous etes bien déconnecté!';
        redirectTo('admin-login');
        exit();
    }

    public function loginPost() {
        global $router;

        $user = Users::findByEmail( $_POST['email'] );
        logEvent( print_r($user) );

        if ( $user === null || empty($user)) // verify user logged
        {
            $_SESSION['attempt'] = 'Identifiants incorrects';
            $_SESSION['mailSave'] = $_POST['email'];
            exit(redirectTo('admin-login'));
        }
        else { // verify password hash and save email user to display
            if( hash('sha256', saltPepperStr($_POST['password']) ) === $user->getPassword() )
            {
                if ( isset($_SESSION['mailSave'])) {
                    unset($_SESSION['mailSave']);
                }
                $_SESSION['userId']     = $user->getId();
                $_SESSION['userObject'] = $user;
                
                exit(redirectTo('admin'));
            }
            else { // error password 
                $_SESSION['attempt'] = 'Identifiants incorrects';
                $_SESSION['mailSave'] = $_POST['email'];
                exit(redirectTo('admin-login'));
            }
        }
    }
    
}