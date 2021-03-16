<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends CoreController
{
    public function list() 
    {
        
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['usersList'] = Users::findAll();
        $datas['breadcrumper'] = get_fill_ariane();

        $this->showAdmin( 'pages/users', $datas );
    }

    public function add() 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();

        $this->showAdmin( 'pages/users/add', $datas);
    }

    public function addPost() 
    {
        logEvent('ADD USER');
        $user = new Users();
        $checkEmail = Users::findByEmail($_POST['email']);
     
        // update values
        $user->setFirstName( $_POST['firstName'] );
        $user->setLastName( $_POST['lastName'] );
        $user->setRole( $_POST['role'] );
        $user->setCreateddAt( date("Y-m-d H:i:s") );

        // verify email valide
        if (isEmailValide($_POST['email'], $checkEmail) === true) {
            $user->setEmail($_POST['email']);
            logEvent('ADD USER EMAIL OK');
        }

        // verify pass valide
        if (isPasswordValide($_POST['password'], $_POST['passwordConfirm'])) {
            $pass = $this->saltPepper($_POST['password']);
            $pass = encrypt($pass);
            $user->setPassword($pass);
            logEvent('ADD USER PASS OK');
        }
        logEvent('ADD USER TEST OK');

        // Send new values to DB
        if ( $user->insert() ) {
            logEvent('ADD USER IN DB');
            exit(redirectTo('admin-profils', ['status' => 'succes']));
        }
        else {
            exit(redirectTo('admin-profils', ['status' => 'errors']));
        }
    }

    public function update( $_id ) 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['userSelect'] = Users::findById( $_id );

        $this->showAdmin( 'pages/users/update', $datas);
    }

    public function updatePost( $_id ) 
    {
        $user = Users::findById($_id);
        $checkEmail = Users::findByEmail($_POST['email']);

        logEvent( print_r($checkEmail));
        // update values
        $user->setFirstName( $_POST['firstName'] );
        $user->setLastName( $_POST['lastName'] );
        $user->setRole( $_POST['role'] );
        $user->setUpdatedAt( date("Y-m-d H:i:s") );

        // verify email valide
        if (isEmailValide($_POST['email'], $checkEmail) === true) {
            $user->setEmail($_POST['email']);
        }

        // verify pass valide
        if (isPasswordValide($_POST['password'], $_POST['passwordConfirm'])) {
            $pass = $this->saltPepper($_POST['password']);
            $pass = encrypt($pass);
            $user->setPassword($pass);
        }

        // Send new values to DB
        if ( $user->update() ) {
            exit(redirectTo('admin-profils-status', ['status' => 'succes']));
        }
        else {
            exit(redirectTo('admin-profils-status', ['status' => 'errors']));
        }
    }

    public function delete($_id) 
    {
        $user = Users::findById($_id);
        if ( $user->delete() ) {
            exit(redirectTo('admin-profils', ['status' => 'succes']));
        }
        else {
            exit(redirectTo('admin-profils', ['status' => 'errors']));
        }
    }
}