<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Contact;
use App\Models\Presentation;
use App\Models\Hero;

class LegalNoticeController extends CoreController
{
    public function list_public() 
    {
        $this->show( 'pages/legalNotice' );
    }

    
}