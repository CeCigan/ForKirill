<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
	// обработчик маршрута  http://host/music/albums/
	public function acAlbums () {
		// получим массив данных об альбомах
		$albums = DB::table("album")->get();
		
		// передаем массив в представление
		return view("albums")->with(["albums" => $albums]);
	}

	// обработчик маршрута http://host/music/album/{id}
	public function acAlbum($id) {
		// получим данные об альбоме по первичному ключу
		$album = DB::table("album")->where("id_album", "=", $id)->first();
		
		// получим данные о группе выпустившей альбом
		$team = DB::table("team")->where("id_team", "=", $album->id_team)->first();
		
		// передаем данные (два объекта) в представление
		return view("album")->with(["team" => $team, "album" => $album]);
	}	

	// обработчик маршрута http://host/music/team/{id}/albums
	public function acAlbumsOfTeam($id) {
		// получим данные о группе по первичному ключу
		$team = DB::table("team")->where("id_team", "=", $id)->first();
		
		// получим массив связанных по внешнему ключу данных 
		$albums = DB::table("album")->where("id_team", "=", $id)->get();
		
		// передаем данные в представление ($team-объект, $albums-массив)
		return view("albums-of-team")->with(["team" => $team, "albums" => $albums]);
	}	
	
	// обработчик маршрута http://host/music/team/{id_team}/album/{id_album}
	public function acAlbumOfTeam($id_team, $id_album) {
		// получим данные о группе по первичному ключу
		$team = DB::table("team")->where("id_team", "=", $id_team)->first();
		
		// получим данные об альбоме по двойному условию
		$album = DB::table("album")->where([
				["id_album", "=", $id_album],
				["id_team", "=", $id_team]
			])->first();
		
		// передаем данные в представление (($team-объект, $album-объект))
		return view("album-of-team")->with(["team" => $team, "album" => $album]);
	}	
	
}