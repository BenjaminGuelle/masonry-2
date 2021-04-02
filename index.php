<?php

require_once __DIR__. '/vendor/autoload.php';
require_once __DIR__. '/app/Tools/construct.php';
require_once __DIR__. '/app/Tools/sendMail.php';
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

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, "fr_FR");
if ($_POST === null) 
{
    $req_body = file_get_contents('php://input');
    $_POST = json_decode($req_body, true);   
}
// dump($_POST);

$mode = (($http_host == $server_name) && $server_name == "localhost") ? "development" : "production";

$url_particle = $mode == "development" ? "/masonry-2" : "";
// define( "BASE_URI", $_SERVER['BASE_URI'] ?? "" );
define( "BASE_URI", $url_particle);

/*******************
 **** ROUTER *******
********************/
$router = new AltoRouter();
$router->setBasePath( BASE_URI );

// === PUBLIC === 
$router->map('GET',  '/',                                   'HomeController::home',                         'homepage'                  );
$router->map('GET',  '/services',                           'ServicesController::list_public',              'services'                  );
$router->map('GET',  '/presentation',                       'PresentationController::list_public',          'presentation'              );
$router->map('GET',  '/galerie',                            'GalleryController::list_public',               'gallery'                   );
$router->map('GET',  '/mentions-legales',                   'LegalNoticeController::list_public',           'legal-notice'              );
$router->map('GET',  '/contact',                            'ContactController::list_public',               'contact'                   );
$router->map('POST', '/contact',                            'ContactController::mangageMailContact',        'contactUs-post'            );
// Route Send mail
$router->map('POST', '/',                                   'ContactController::mangageMailContact',        'contact-post'              );

// === PRIVATE ===
$router->map('GET',  '/Admin',                              'AdminController::admin',           'admin'                     );
$router->map('POST', '/Admin',                              'LoginController::logout',          'admin-logout'              );
// Routes Login
$router->map('GET',  '/Admin/login',                        'LoginController::login',           'admin-login'               );
$router->map('POST', '/Admin/login',                        'LoginController::loginPost',       'admin-loginPost'           );
// Routes Users
$router->map('GET',  '/Admin/profils',                      'UsersController::list',            'admin-profils'             );
$router->map('POST', '/Admin/profils[i:id]/delete',         'UsersController::delete',          'admin-profils-delete'      );
$router->map('GET',  '/Admin/profils/ajout',                'UsersController::add',             'admin-profils-add'         );
$router->map('POST', '/Admin/profils/ajout',                'UsersController::addPost',         'admin-profils-addPost'     );
$router->map('GET',  '/Admin/profils?status=[:status]',     'UsersController::list',            'admin-profils-status'      );
$router->map('GET',  '/Admin/profils[i:id]/update',         'UsersController::update',          'admin-profils-update'      );
$router->map('POST', '/Admin/profils[i:id]/update',         'UsersController::updatePost',      'admin-profils-updatePost'  );
// Routes Presentation
$router->map('GET',  '/Admin/presentation',                 'PresentationController::list',     'admin-presentation'        );
$router->map('POST', '/Admin/presentation[i:id]/edit',      'PresentationController::edit',     'admin-presentation-edit'   );
$router->map('POST', '/Admin/presentation[i:id]/upload',    'PresentationController::upload',   'admin-presentation-upload' );
// Route Hero
$router->map('GET',  '/Admin/hero',                         'HeroController::list',             'admin-hero'                );
$router->map('POST', '/Admin/hero[i:id]/edit',              'HeroController::edit',             'admin-hero-edit'           );
$router->map('POST', '/Admin/hero[i:id]/upload',            'HeroController::upload',           'admin-hero-upload'         );
// Route Services
$router->map('GET',  '/Admin/services',                     'ServicesController::list',         'admin-services'            );
$router->map('POST', '/Admin/services[i:id]/edit',          'ServicesController::edit',         'admin-services-edit'       );
$router->map('POST', '/Admin/services[i:id]/upload',        'ServicesController::upload',       'admin-services-upload'     );
// Route Contact
$router->map('GET',  '/Admin/contact',                     'ContactController::list',           'admin-contact'             );
$router->map('POST', '/Admin/contact[i:id]/edit',          'ContactController::edit',           'admin-contact-edit'        );
// === ERRORS ===
$router->map(
    'GET', '/error',      'ErrorController::error404',  'error'
);

$match = $router->match();

$dispatcher = new Dispatcher( $match, 'ErrorController::error404' );
$dispatcher->setControllersNamespace('App\Controllers');
$dispatcher->dispatch();


