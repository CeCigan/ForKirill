<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// ПЕРЕДАЧА В КОНТРОЛЛЕР ДВУХ ПАРАМЕТРОВ

// регистрируем маршрут http://host/music/team/{парметр1}/album/{параметр2}
/*
в качестве {параметр1}, {параметр2} - может быть передан любой набор символов,
но мы предполагаем, что будет передан идентификатор группы и альбома

маршрут может быть таким:
пример: http://host/music/team/21/album/3
*/
Route::get ('/music/team/{idTeam}/album/{idAlbum}', [MainController::class, 'acAlbum']);
// -------------------------------------

// регистрируем маршрут http://host/music/team/{параметр1}/album/{параметр2}/tracks
// пример: http://host/music/team/4/album/3/tracks
Route::get ('/music/team/{idTeam}/album/{idAlbum}/tracks', [MainController::class, 'acTracks']);
// -------------------------------------