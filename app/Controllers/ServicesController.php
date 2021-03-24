<?php

namespace App\Controllers;

use App\Models\Users;

class ServicesController extends CoreController
{
    public function list() 
    {
        $datas = [];
        $datas['user'] = Users::findById($_SESSION['userId']);
        $datas['breadcrumper'] = get_fill_ariane();
    
        $this->showAdmin( 'pages/services', $datas );
    }

    
}