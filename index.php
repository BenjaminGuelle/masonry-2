<?php

require_once __DIR__. '/vendor/autoload.php';
require_once __DIR__. '/app/Tools/construct.php';
require_once __DIR__. '/app/Tools/log.php';

initLogs(time());

define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );

/*******************
 **** SESSION ******
********************/
session_cache_expire(24 * 60 * 365);
if (isset( $_COOKIE['token_session']))
{
    session_start( [$_COOKIE['token_session']] );
}
else session_start();




/*******************
 **** ROUTER *******
********************/

$router = new AltoRouter();
$router->setBasePath( BASE_URI );

// === PUBLIC === 
$router->map(
    'GET', '/',             'HomeController::home',     'homepage'
);
$router->map(
    'GET', '/services',     'ServicesController::list', 'services'
);
$router->map(
    'GET', '/presentation', 'SocietyController::prez',  'presentation'
);
$router->map(
    'GET', '/galerie',      'GalleryController::list',  'gallery'
);

// === PRIVATE ===
$router->map(
    'GET', '/Admin',        'AdminController::admin',   'admin'
);
$router->map(
    'POST', '/Admin',  'LoginController::logout',   'admin-logout'
);
$router->map(
    'GET', '/Admin/login',  'LoginController::login',   'admin-login'
);
$router->map(
    'POST', '/Admin/login', 'LoginController::loginPost',   'admin-loginPost'
);


$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();

