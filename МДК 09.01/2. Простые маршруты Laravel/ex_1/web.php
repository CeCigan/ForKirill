<?php
use Illuminate\Support\Facades\Route;


// регистрируем маршрут http://host/
Route::get('/', function (){
	echo "<h1>Главная страница сайта</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/about
Route::get ('/about', function (){
	echo "<h1>Страница: О нас</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/contacts
Route::get ('/contacts', function (){
	echo "<h1>Страница: Контакты</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/music
Route::get ('/music', function (){
	echo "<h1>Страница: Музыкальный портал</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/music/teams
Route::get ('/music/teams', function (){
	echo "<h1>Страница: Вывод всех групп</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/music/albums
Route::get ('/music/albums', function (){
	echo "<h1>Страница: Вывод всех альбомов</h1>";
});
// -------------------------------------

// регистрируем маршрут http://host/music/tracks
Route::get ('/music/tracks', function (){
	echo "<h1>Страница: Вывод всех треков</h1>";
});
// -------------------------------------