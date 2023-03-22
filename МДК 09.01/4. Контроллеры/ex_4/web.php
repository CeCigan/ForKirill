<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\MainController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА


// ПЕРЕДАЧА В КОНТРОЛЛЕР ТРЕХ ПАРАМЕТРОВ

// регистрируем маршрут http://host/music/{парметр1}/album/{параметр2}/track/{параметр3}
// пример: http://host/music/team/2/album/7/track/11
Route::get ('/music/team/{idTeam}/album/{idAlbum}/track/{idTrack}', [MainController::class, 'acTrack']);