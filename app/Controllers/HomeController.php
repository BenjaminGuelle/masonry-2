<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Contact;
use App\Models\Presentation;
use App\Models\Hero;

class HomeController extends CoreController
{
    public function home() {

        $datas = [];
        $datas['heros'] = Hero::findAll();
        $datas['contact'] = Contact::findAll();
        $datas['presentation'] = Presentation::findAll();

        $this->show( 'pages/home', $datas );
    }

    
}