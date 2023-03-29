<?php
use Illuminate\Support\Facades\Route;
// !!! не забудьте подключить контроллер
use App\Http\Controllers\AlbumController; // ПОДКЛЮЧЕНИЕ КОНТРОЛЛЕРА

// регистрируем маршрут http://host/music/albums/
// извлекаем все альбомы всех групп
Route::get ('/music/albums', [AlbumController::class, 'acAlbums']);
// -------------------------------------

// регистрируем маршрут http://host/music/album/{id}
// пример: http://host/music/album/2
// (извлекаем определенный альбом (id=2))
Route::get ('/music/album/{id}', [AlbumController::class, 'acAlbum']);
// -------------------------------------

// регистрируем маршрут http://host/music/team/{id}/albums
// пример: http://host/music/team/3/albums
// (извлекаем все альбомы определенной группы (id=3))
Route::get ('/music/team/{id}/albums', [AlbumController::class, 'acAlbumsOfTeam']);
// -------------------------------------

// регистрируем маршрут http://host/music/team/{id_team}/album/{id_album}
// пример: http://host/music/team/3/album/5
// (извлекаем альбом (id_album = 5) группы (id_team = 3))
Route::get ('/music/team/{id_team}/album/{id_album}', [AlbumController::class, 'acAlbumOfTeam']);
// -------------------------------------