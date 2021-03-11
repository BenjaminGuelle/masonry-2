<?php

namespace App\Controllers;

use App\Models\Users;

class AdminController extends CoreController
{
    public function admin() {
        
        $userLogged = [];
        $userLogged['user'] = Users::findById($_SESSION['userId']);


        $this->showAdmin( 'pages/homeA', $userLogged );
    }
}