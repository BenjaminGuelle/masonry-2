<?php

require __DIR__. '/vendor/autoload.php';
require __DIR__. '/app/Tools/construct.php';

define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );

session_start();
// dump( $_SESSION );
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


$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();

