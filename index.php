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
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'HomeController',
    ],
    'homepage'
);

// === PRIVATE ===
$router->map(
    'GET',
    '/Admin',
    [
        'method' => 'cockpit',
        'controller' => 'AdminController',
    ]
);

$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();