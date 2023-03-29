<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
	// обработчик маршрута  http://host/music/tracks/
	public function acTracks () {
		// получим массив данных о треках
		$tracks = DB::table("track")->get();
		
		// передаем массив в представление
		return view("tracks")->with(["tracks" => $tracks]);
	}

	// обработчик маршрута  http://host/music/track/{параметр}
	public function acTrack($id) {
		// получим данные о треке по первичному ключу
		$track = DB::table("track")->where("id_track", "=", $id)->first();		
		
		// получим данные об альбоме по первичному ключу
		$album = DB::table("album")->where("id_album", "=", $track->id_album)->first();				
		
		// получаим данные о группе по первичному ключу
		$team = DB::table("team")->where("id_team", "=", $album->id_team)->first();

		// передаем данные в представление ($team-объект, $album-объект, $track-объект)
		return view("track")->with(["team" => $team, "album" => $album, "track" => $track]);
	}		
	
	// обработчик маршрутаhttp://host/music/album/{параметр}/tracks
	public function acTracksOfAlbum($id) {
		// получим данных об альбоме по первичному ключу 
		$album = DB::table("album")->where("id_album", "=", $id)->first();		
		
		// получим данные о группе по первичному ключу
		$team = DB::table("team")->where("id_team", "=", $album->id_team)->first();

		// получим массив данных о треках по внешнему ключу
		$tracks = DB::table("track")->where("id_album", "=", $id)->get();
		
		// передаем данные в представление ($team-объект, $album-объект, $tracks-массив)
		return view("tracks-of-album")->with(["team" => $team, "album" => $album, "tracks" => $tracks]);
	}	

	// обработчик маршрута http://host/music/album/{параметр1}/track/{параметр2}
	public function acTrackOfAlbum($id_album, $id_track) {
		// получим данных о альбоме по первичному ключу 
		$album = DB::table("album")->where("id_album", "=", $id_album)->first();		
		
		// получим данные о треке по сложному условию
		$track = DB::table("track")->where([
				["id_track", "=", $id_track],
				["id_album", "=", $id_album]
			])->first();
		
		// передаем данные в представление ($album-объект, $track-объект)
		return view("track-of-album")->with(["album" => $album, "track" => $track]);
	}		

}