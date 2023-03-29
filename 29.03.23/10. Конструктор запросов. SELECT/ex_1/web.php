<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// регистрируем маршрут http://host/music/teams/get
Route::get ('/music/teams/get', [MainController::class, 'acTeamsGet']);
// -------------------------------------

// регистрируем маршрут http://host/music/team/first/{id}
// пример:  http://host/music/team/first/5
Route::get ('/music/team/first/{id}', [MainController::class, 'acTeamFirst']);
// -------------------------------------


// регистрируем маршрут http://host/music/team/get/{id}
// пример:  http://host/music/team/get/5
Route::get ('/music/team/get/{id}', [MainController::class, 'acTeamGet']);
// -------------------------------------