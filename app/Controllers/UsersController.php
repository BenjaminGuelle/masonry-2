<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController extends CoreController
{
    public function list() {
        
        $userLogged = [];

        $userLogged['user'] = Users::findById($_SESSION['userId']);

        $this->showAdmin( 'pages/users', $userLogged );
    }
}