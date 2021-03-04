<?php

namespace App\Controllers;

class ErrorController extends CoreController
{
    /**
     * Méthode gérant l'affichage de la page 404
     *
     * @return void
     */
    public function error404() 
    {
        dump('ERREUR');
    }
}