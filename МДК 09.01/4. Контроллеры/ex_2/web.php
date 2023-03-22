<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// ПЕРЕДАЧА В КОНТРОЛЛЕР ОДНОГО ПАРАМЕТРА

// регистрируем маршрут http://host/music/team/{параметр}
/*
в качестве {параметр} - может быть передан любой набор символов,
но мы предполагаем, что будет передан идентификатор группы
маршрут может быть таким:
http://host/music/team/11
http://host/music/team/3
*/
Route::get ('/music/team/{idTeam}', [MainController::class, 'acTeam']);
// -------------------------------------

// регистрируем маршрут http://music/team/{параметр}/albums
// пример: http://host/music/team/4/albums 
Route::get ('/music/team/{idTeam}/albums', [MainController::class, 'acAlbums']);
// -------------------------------------