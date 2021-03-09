<?php

require __DIR__. '/vendor/autoload.php';
require __DIR__. '/app/Tools/construct.php';

define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );

/*******************
 **** SESSION ******
********************/
if(isset($_COOKIE['token_session']))
{
    session_name($_COOKIE['token_session']);
    session_start();
}
else
{
    $token_session = encrypt(time(), 'sha256');
    setcookie("token_session", $token_session, (time() + 24 * 3600 * 365));
    session_name($token_session);
    session_start();
}
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
    'GET', '/Admin/login',  'LoginController::login',   'admin-login'
);
$router->map(
    'POST', '/Admin/login', 'LoginController::loginPost',   'admin-loginPost'
);


$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();

