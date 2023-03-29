<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// регистрируем маршрут http://host/music/team/{параметр}
// пример: http://host/music/team/11
Route::get ('/music/team/{idTeam}', [MainController::class, 'acTeam']);
// -------------------------------------