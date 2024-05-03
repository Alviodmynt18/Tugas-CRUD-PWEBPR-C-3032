<?php 

$url = $_SERVER['REQUEST_URI'];
$path = basename(parse_url($url, PHP_URL_PATH));

$routes = [];

// Rute tanpa parameter
$routes['GET']['/'] = 'DashboardController@index'; // 
$routes['GET']['/playlistmusic'] = 'MusicController@select';
$routes['GET']['/pageinsert'] = 'MusicController@pageinsert';
$routes['POST']['/insertplaylistmusic'] = 'MusicController@insert';
$routes['GET']['/login'] = 'MusicController@login';
$routes['GET']['/register'] = 'MusicController@register';

// Rute dengan parameter
$routes['GET']['/pageupdate/{id}'] = 'MusicController@pageupdate';
$routes['POST']['/updateplaylistmusic/{ID_music}'] = 'MusicController@update';
$routes['GET']['/detailmusic/{id}'] = 'MusicController@detail';
$routes['GET']['/deleteplaylistmusic/{ID_music}'] = 'MusicController@delete';

?>