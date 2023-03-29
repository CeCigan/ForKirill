<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\TrackController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА

// регистрируем маршрут http://host/music/tracks/
// (извлекаем все треки)
Route::get ('/music/tracks/', [TrackController::class, 'acTracks']);
// -------------------------------------

// регистрируем маршрут http://host/music/track/{параметр}
// пример: http://host/music/track/3
// (извлекаем определенный трек (id=3)) 
Route::get ('/music/track/{id}', [TrackController::class, 'acTrack']);
// -------------------------------------

// регистрируем маршрут http://host/music/album/{параметр}/tracks
// пример: http://host/music/album/2/tracks
// (извлекаем все треки определенного альбома (id=2))
Route::get ('/music/album/{id}/tracks', [TrackController::class, 'acTracksOfAlbum']);
// -------------------------------------

// регистрируем маршрут http://host/music/album/{параметр1}/track/{параметр2}
// пример: http://host/music/album/2/track/23
// (извлекаем трек (id_track = 23) альбома (id_album = 2))
Route::get ('/music/album/{id_album}/track/{id_track}', [TrackController::class, 'acTrackOfAlbum']);
// -------------------------------------