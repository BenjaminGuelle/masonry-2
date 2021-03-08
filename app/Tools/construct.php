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