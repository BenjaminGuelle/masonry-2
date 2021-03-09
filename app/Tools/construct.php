<?php

function getPath( string $name ) {
    return BASE_URI.$name;
}

function getPrivateCss( string $name ) {
    return getPath('/private/assets/css/'.$name.'.css');
}

function getPublicCss( string $name ) {
    return getPath('/public/assets/css/'.$name.'.css');
}

function getPrivateJs( string $name ) {
    return getPath('/private/js/'.$name.'.js');
}

function getPublicJs( string $name ) {
    return getPath('/public/js/'.$name.'.js');
}

function saltPepperStr( string $str ) {
    return 'salt'.$str.'pepper';
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

function redirectTo( string $path ) {
    try {
        if ( getType( $path) != 'string') {
            throw new Exception(`$path : is not a string`);
        }
        else {
            header("Location: ". $GLOBALS['router']->generate( $path ));
        }
    }
    catch(\RuntimeException $error) { 
        echo `$path : is not a match road`;
        echo $error;
    }
    catch(\Exception $error) { 
        return $error;
    }
}

function isLoged() {
    if ( isset($_SESSION['userId']) )
    {
        return true;
    }
    else return false;
}