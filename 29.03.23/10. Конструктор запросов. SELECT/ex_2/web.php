<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\TeamController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// регистрируем маршрут http://host/music/teams/
// (извлекаем все группы)
Route::get ('/music/teams/', [TeamController::class, 'acTeams']);
// -------------------------------------

// регистрируем маршрут http://host/music/team/{id}
// пример: http://host/music/team/3  
// (извлекаем группу с id=3)
Route::get ('/music/team/{id}', [TeamController::class, 'acTeam']);
// -------------------------------------