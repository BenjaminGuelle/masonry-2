<?php

namespace App\Controllers;

class GalleryController extends CoreController
{
    public function list() {
        $this->show( 'pages/galerie' );
    }

    
}