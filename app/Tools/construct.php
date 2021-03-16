<?php

use App\Controllers\CoreController;

/**
 * function to get path file Js and Css
 */
function getPath( string $name ) 
{
    return BASE_URI.$name;
}

// GET PUBLIC 
function getPublicCss( string $name ) 
{
    return getPath('/public/assets/css/'.$name.'.css');
}

function getPublicMjs( string $name ) 
{
    return getPath('/private/js/'.$name.'.mjs');
}

function getPublicJs( string $name ) 
{
    return getPath('/public/js/'.$name.'.js');
}

// GET PRIVATE
function getPrivateCss( string $name ) 
{
    return getPath('/private/assets/css/'.$name.'.css');
}

function getPrivateJs( string $name ) 
{
    return getPath('/private/js/'.$name.'.js');
}

function getPrivateMjs( string $name ) 
{
    return getPath('/private/js/'.$name.'.mjs');
}

/**
 * function to get path private and public assets
 */
function getPrivateAssets( string $name ) 
{
    return getPath('/private/assets/'.$name);
}
function getPublicAssets( string $name ) 
{
    return getPath('/public/assets/'.$name);
}

/**
 * Short - 
*
* Detailed - 
*
* @param Type $name Description
*
* @return retour
*/
function encrypt($str, $method = 'sha256')
{
    return !$str ? NULL : hash($method, $str);
}


// Function to redirect 
function redirectTo( string $path, array $params = null ) 
{
    try {
        if ( getType( $path) != 'string') {
            throw new Exception(`$path : is not a string`);
        }
        else {
            if ( empty($params) ) {
                exit(header("Location: ". $GLOBALS['router']->generate( $path )));
            }
            else {
                exit(header("Location: ". $GLOBALS['router']->generate( $path, $params )));
            }
        }
    }
    catch(\RuntimeException $error) {
        logError(print_r(`$path : is not a match road`));
        logError(print_r($error));
    }
    catch(\Exception $error) { 
        return $error;
    }
}

// verify users logged
function isLoged() 
{
    if ( isset($_SESSION['userId']) )
    {
        return true;
    }
    else return false;
}

function handleLoginFaild() 
{
    $_SESSION['attempt'] = 'Identifiants incorrects';
    $_SESSION['mailSave'] = $_POST['email'];
    unsetLoginPost();
    exit(redirectTo('admin-login'));
}

function handleLoginSuccess( $user ) 
{
    if ( isset($_SESSION['mailSave'])) {
        unset($_SESSION['mailSave']);
    }
    $_SESSION['userId']     = $user->getId();
    $_SESSION['userObject'] = $user;
    unsetLoginPost();
    exit(redirectTo('admin'));
}

function unsetLoginPost() 
{
    unset($_POST['email']);
    unset($_POST['password']);
}

// verify mail valide
function isEmailValide(string $_email, $_allEmail) 
{
    if ( !filter_var($_email, FILTER_VALIDATE_EMAIL) ) 
    {
        logEvent('EMAIL NON VALIDE');
        $_SESSION['verifyEmail'] = 'Email non valide';
        unset($_email);
        return false;
    }
    elseif ( $_allEmail !== null && $_allEmail !== false ) 
    {
        logEvent('EMAIL DEJA UTILISE');
        // dump($_allEmail);
        $_SESSION['verifyEmail'] = 'Email déjà utilisé';
        unset($_email);
        return false;
    }
    else {
        return true;
    }
}

// verify password valide
function isPasswordValide(string $_password, string $_passwordComfirm ) 
{
    if ( isset($_password) && (isset($_passwordComfirm)) ) {
        if ( $_password === $_passwordComfirm ) {
            if (preg_match('/[0-9]/', $_password)) {
                if (preg_match('/[a-z]/', $_password)) {
                    if (preg_match('/[A-Z]/', $_password)) {
                        return true;
                    }
                }
            }
            else {
                $_SESSION['verifyPass'] = 'Le mot de passe doit contenir les carractères (a-z), (0-9), et (A-Z)';
                return false;
            }
        }
        else {
            $_SESSION['verifyPass'] = 'le mot de pass et la confirmation ne sont pas identiques';
            logEvent('pass et confirm pas ok');
            return false;
        }  
    }
}

/**
 * Create breadcrump
 * @param Type @name
 * @return string breadcrump
 */
function get_fill_ariane() 
{
    $routeName = $GLOBALS['match']['name'];
    $nameArr = explode('-', $routeName);
    return $nameArr;
}

function build_breadcrump( $path ) 
{
    if ( $path === 'admin' ) {
        return 'admin';
    }
    elseif ( $path === 'profils' ) {
        return 'admin-profils';
    }
    elseif ( $path === 'update' ) {
        return 'admin-profils-update';
    }
}


