<?php

namespace App\Controllers;

class CoreController
{
    public function __construct()
    {
        global $match;
        if ( !isset($match['name']) || $match === false) {
            exit(redirectTo('error'));
        }
        $routeName = $match['name'];
        $acl = [
            "admin"                         => ['superadmin', 'admin'],
            "admin-profils"                 => ['superadmin', 'admin'],
            "admin-profils-update"          => ['superadmin', 'admin'],
            "admin-profils-updatePost"      => ['superadmin', 'admin'],
            "admin-profils-status"          => ['superadmin', 'admin'],
            "admin-profils-delete"          => ['superadmin', 'admin'],
            "admin-profils-add"             => ['superadmin', 'admin'],
            "admin-profils-addPost"         => ['superadmin', 'admin'],
            "admin-presentation"            => ['superadmin', 'admin'],
            "admin-presentation-edit"       => ['superadmin', 'admin'],
            "admin-presentation-upload"     => ['superadmin', 'admin'],
            "admin-hero"                    => ['superadmin', 'admin'],
            "admin-hero-edit"               => ['superadmin', 'admin'],
            "admin-hero-upload"             => ['superadmin', 'admin'],
            "admin-services"                => ['superadmin', 'admin'],
            "admin-services-edit"           => ['superadmin', 'admin'],
            "admin-services-upload"         => ['superadmin', 'admin'],
            "admin-contact"                 => ['superadmin', 'admin'],
            "admin-contact-edit"            => ['superadmin', 'admin'],
            
        ];

        // Verify protected road
        if ( isset($acl[$routeName]) && array_key_exists($routeName, $acl)) {

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
        require_once __DIR__.'./../Views/front/layout/header.tpl.php';
        include_once __DIR__.'./../Views/front/'.$viewName.'.tpl.php';
        require_once __DIR__.'./../Views/front/layout/footer.tpl.php';
    }

    protected function showAdmin( string $viewName, $viewVars = [] ) 
    {
        global $router;

        // définir l'url absolue pour nos assets
        $viewVars['assetsBaseUri'] = BASE_URI . '/assets/';

        // extract pour recuperer les values directement
        extract( $viewVars );

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__.'./../Views/back/layout/headerA.tpl.php';
        include_once __DIR__.'./../Views/back/'.$viewName.'.tpl.php';
        require_once __DIR__.'./../Views/back/layout/footerA.tpl.php';
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
    
    protected function saltPepper(string $str) {
        return $this->getConfigVar()['SALT'].$str.$this->getConfigVar()['PEPPER'];
    }

    //===============================
    // Getters
    //===============================
    private static function getConfig() { return parse_ini_file('./config/config.ini'); }
    

    //===============================
    // Setters
    //===============================
    


}