<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist_Musica;

class PlaylistMusicaController extends Controller
{

    public function adicionar(Request $request){
        
        $playlist_musica = new Playlist_Musica();
        $playlist_musica->musicas_id = $request->musicas_id;
        $playlist_musica->plalists_id = $request->plalists_id;
        $s = $playlist_musica->save();

        if($s){
            return response("Musica adicionada a playlist com sucesso", 201);
        }
        return response("Ocorreu algum erro, tente novamente", 400);
    }

    public function acessar(){
 
        $musicas = Playlist::find(1)->roles()->orderBy('nome')->get();

        return $this->belongsToMany(Musica::class, 'playlist_musica');
    }
}
