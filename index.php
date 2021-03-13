<?php

require_once __DIR__. '/vendor/autoload.php';
require_once __DIR__. '/app/Tools/construct.php';
require_once __DIR__. '/app/Tools/log.php';

initLogs(time());
/*******************
 **** SESSION ******
********************/
session_cache_expire(24 * 60 * 365);
if (isset( $_COOKIE['token_session']))
{
    session_start( [$_COOKIE['token_session']] );
}
else session_start();

$http_host = $_SERVER['HTTP_HOST'];
$server_name = $_SERVER['SERVER_NAME'];
$request_scheme = $_SERVER['REQUEST_SCHEME'];
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$php_self = $_SERVER['PHP_SELF'];

$mode = (($http_host == $server_name) && $server_name == "localhost") ? "development" : "production";

$url_particle = $mode == "development" ? "/masonry-2" : "";
// define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );
define( "BASE_URI", $url_particle ?? "" );

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
$router->map(
    'GET', '/Admin/profils',  'UsersController::list',   'admin-profils'
);
$router->map(
    'GET', '/Admin/profils[i:id]/update',  'UsersController::update',   'admin-profils-update'
);

$match = $router->match();

// dump(get_fill_ariane());

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();

