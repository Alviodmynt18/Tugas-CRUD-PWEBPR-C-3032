<?php 

$url = $_SERVER['REQUEST_URI'];
$path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

$routes['GET']['/'] = 'DashboardController@index'; 
$routes['GET']['/dashboard'] = 'MusicController@select';
$routes['GET']['/pageinsert'] = 'MusicController@pageinsert';
$routes['POST']['/insert'] = 'MusicController@insert';
$routes['POST']['/update'] = 'MusicController@update';
$routes['GET']['/pageupdate/{Id}'] = 'MusicController@pageupdate';
$routes['GET']['/delete/{ID_music}'] = 'MusicController@delete';
$routes['GET']['/login'] = 'authcontroller@viewlogin';
$routes['GET']['/register'] = 'authcontroller@viewregister';
$routes['POST']['/login'] = 'authController@login';
$routes['POST']['/register'] = 'authcontroller@register';
$routes['GET']['/logout'] = 'authcontroller@logout';

?>