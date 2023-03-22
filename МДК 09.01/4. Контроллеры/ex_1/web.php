<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// регистрируем маршру  http://host/
// обработчик: контроллер - MainController, действие (функция) - acIndex
Route::get('/', [MainController::class, 'acIndex']);
// -------------------------------------

// регистрируем маршрут http://host/about
// обработчик: контроллер - MainController, действие (функция) - acAbout
Route::get ('/about', [MainController::class, 'acAbout']);
// -------------------------------------

// регистрируем маршрут http://host/contacts
// обработчик: контроллер - MainController, действие (функция) - acContacts
Route::get ('/contacts', [MainController::class, 'acContacts']);
// -------------------------------------

// регистрируем маршрут http://host/music
// обработчик: контроллер - MainController, действие (функция) - acMusic
Route::get ('/music', [MainController::class, 'acMusic']);
// -------------------------------------

// регистрируем маршрут http://host/music/teams
// обработчик: контроллер - MainController, действие (функция) - acTeams
Route::get ('/music/teams', [MainController::class, 'acTeams']);
// -------------------------------------

// регистрируем маршрут http://host/music/albums
// обработчик: контроллер - MainController, действие (функция) - acAlbums
Route::get ('/music/albums', [MainController::class, 'acAlbums']);
// -------------------------------------

// регистрируем маршрут http://host/music/tracks
// обработчик: контроллер - MainController, действие (функция) - acTracks
Route::get ('/music/tracks', [MainController::class, 'acTracks']);
// -------------------------------------