<?php 

$url = $_SERVER['REQUEST_URI'];
$path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

$routes['GET']['/'] = 'DashboardController@index'; 
$routes['GET']['/dashboard'] = 'MusicController@select';
$routes['GET']['/pageinsert'] = 'MusicController@pageinsert';
$routes['POST']['/insert'] = 'MusicController@insert';
$routes['POST']['/update'] = 'MusicController@update';
$routes['GET']['/login'] = 'MusicController@login';
$routes['GET']['/register'] = 'MusicController@register';
$routes['GET']['/pageupdate/{Id}'] = 'MusicController@pageupdate';
$routes['GET']['/delete/{ID_music}'] = 'MusicController@delete';

?>