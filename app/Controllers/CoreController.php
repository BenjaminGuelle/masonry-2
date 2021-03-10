<?php

namespace App\Controllers;

class CoreController
{
    public function __construct()
    {
        global $match;
        
        $routeName = $match['name'];
        $acl = [
            "admin" => ['superadmin', 'admin'],
        ];

        // Verify protected road
        if ( array_key_exists($routeName, $acl)) {

            $authRoles = $acl[ $routeName ];

            $this->checkAuth($authRoles);
            
            $token_session = encrypt(time(), 'sha256');
            setcookie("token_session", $token_session, (time() + 24 * 3600 * 360));
            session_regenerate_id($token_session);
        }
    }

    //===============================
    // Display views
    //===============================
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

    // Verify authorization to acces views
    public function checkAuth( array $_role = [] ) 
    {
        global $router;
        if ( isset($_SESSION['userId']) )
        {
            $role = $_SESSION['userObject']->getRole();

            if ( in_array($role, $_role)) 
            {
                return true;
            }
            else  {
                header("HTTP/1.0 403 Forbidden" );
                // display 404 view
                // $this->show('error/err403');
                exit();
            }
        }
        else {
            redirectTo('admin-login');
            
            exit();
        }     
    }

    // Set acces database
    public static function getConfigVar() {
        if ( self::getConfig() ) 
        {
            return self::getConfig();
        }
        return null;
    }

    //===============================
    // Getters
    //===============================
    private static function getConfig() { return parse_ini_file(__DIR__.'/../config.ini'); }
    

    //===============================
    // Setters
    //===============================
    


}