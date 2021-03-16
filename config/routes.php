<?php
/*******************
 **** ROUTER *******
********************/
$router = new AltoRouter();
$router->setBasePath( $GLOBALS['BASE_URI'] );

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
$router->map(
    'GET', '/Admin/profils',  'UsersController::list',   'admin-profils'
);
$router->map(
    'GET', '/Admin/profils?status=[:status]',  'UsersController::list',   'admin-profils-status'
);
$router->map(
    'GET', '/Admin/profils[i:id]/update',  'UsersController::update',   'admin-profils-update'
);
$router->map(
    'POST', '/Admin/profils[i:id]/update',  'UsersController::updatePost',   'admin-profils-updatePost'
);

// === ERRORS ===
$router->map(
    'GET', '/error',      'ErrorController::error404',  'error'
);

$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();
