<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// регистрируем маршрут http://host/music/team
// пример: http://host/music/team

Route::get ('/music/team', [MainController::class, 'acTeam']);
// -------------------------------------