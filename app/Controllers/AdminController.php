<?php

namespace App\Controllers;

use App\Models\Users;

class AdminController extends CoreController
{
    public function admin() {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);

        $datas['breadcrumper'] = get_fill_ariane();

        $this->showAdmin( 'pages/homeA', $datas );
    }
}