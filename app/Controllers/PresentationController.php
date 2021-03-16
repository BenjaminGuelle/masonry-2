<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Presentation;

class PresentationController extends CoreController
{
    public function list() {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
        $datas['presentation'] = Presentation::findAll();
    
        $this->showAdmin( 'pages/presentation', $datas );
    }    
}