<?php

require __DIR__. '/vendor/autoload.php';

define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );

/*******************
 **** ROUTER *******
********************/

$router = new AltoRouter();
$router->setBasePath( BASE_URI );

// === PUBLIC === 
$router->map(
    'GET', '/', 'HomeController::home', 'homepage'
);
$router->map(
    'GET', '/services', 'ServicesController::list', 'services'
);
$router->map(
    'GET', '/presentation', 'SocietyController::prez', 'presentation'
);
$router->map(
    'GET', '/galerie', 'GalleryController::list', 'gallery'
);

// === PRIVATE ===
$router->map(
    'GET', '/Admin', 'AdminController::admin', 'admin'
);

$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();

