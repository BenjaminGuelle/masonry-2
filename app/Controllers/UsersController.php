<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends CoreController
{
    public function list() {
        
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);

        $datas['usersList'] = Users::findAll();

        $datas['breadcrumper'] = get_fill_ariane();

        $this->showAdmin( 'pages/users', $datas );
    }

    public function update( $id ) {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['userSelect'] = Users::findById( $id );

        $this->showAdmin( 'pages/users/update', $datas);
    }

    public function updatePost( $id ) {
        $user = Users::findById($id);
        $checkEmail = Users::findByEmail($_POST['email']);
        $pass = $_POST['password'];

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

        // $user->setPassword( $_POST['password'] );

        // Send new values to DB
        if ( $user->update() ) {
            exit(redirectTo('admin-profils-status', ['status' => 'succes']));
        }
        else {
            exit(redirectTo('admin-profils-status', ['status' => 'errors']));
        }
    }
}