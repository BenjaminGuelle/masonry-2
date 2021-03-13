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
        dump('OK');
    }
}