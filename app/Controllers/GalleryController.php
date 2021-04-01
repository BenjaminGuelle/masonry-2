<?php

namespace App\Controllers;

class GalleryController extends CoreController
{
    public function list_public() {
        $this->show( 'pages/galerie' );
    }

    
}