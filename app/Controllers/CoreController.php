<?php

namespace App\Controllers;

class CoreController
{
    public function __construct()
    {
        global $match;

        $routeName = $match['name'];
        $acl = [
            "admin" => ['admin'],
        ];

    }

    protected function getConfigVar( string $value ) {
        if ( $this->getConfig()[$value] ) 
        { 
            return $this->getConfig()[$value];
        }
        return null;
    }

    public function echoTruc() {
        echo 'truc';
    }

    protected function show( string $viewName, $viewVars = [] ) 
    {
        global $router;

        // définir l'url absolue pour nos assets
        $viewVars['assetsBaseUri'] = BASE_URI . '/assets/';

        // extract pour recuperer les values directement
        extract( $viewVars );

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/front/layout/header.tpl.php';
        include_once __DIR__.'/../views/front/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/front/layout/footer.tpl.php';
    }

    protected function showAdmin( string $viewName, $viewVars = [] ) 
    {
        global $router;

        // définir l'url absolue pour nos assets
        $viewVars['assetsBaseUri'] = BASE_URI . '/assets/';

        // extract pour recuperer les values directement
        extract( $viewVars );
        //dump( get_defined_vars() );

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'/../views/back/layout/headerA.tpl.php';
        include_once __DIR__.'/../views/back/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/back/layout/footerA.tpl.php';
    }

    public function checkAuth( $_role = [] ) 
    {
        //TODO: implement
    }

    //===============================
    // Getters
    //===============================
    private function getConfig() { return parse_ini_file(__DIR__.'/../config.ini'); }
    

    //===============================
    // Setters
    //===============================
    


}