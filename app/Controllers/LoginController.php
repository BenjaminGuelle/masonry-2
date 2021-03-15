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
            handleLoginFaild();
        }
        else { // verify password hash and save email user to display
            if( hash('sha256', $this->saltPepper($_POST['password']) ) === $user->getPassword() )
            {
                handleLoginSuccess( $user );
            }
            else { // error password
                handleLoginFaild();
            }
        }
    }
    
}