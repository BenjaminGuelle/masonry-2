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
}