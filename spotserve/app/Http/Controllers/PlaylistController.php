<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    //
    public function criar(Request $request){

        $playlist = new Playlist();
        $playlist->nome = $request->nome;
        $playlist->img = $request->img;
        $playlist->users_id = $request->users_id;
        $s = $playlist->save();

        if($s){
            return response("Criada PlayList com sucesso", 201);
        }
        return response("Ocorreu algum erro, tente novamente", 400);

    }

    public function listar(){

        $playlists = Playlist::with('musicas')->get();
        return response($playlists,200);

    }

    public function vermusicas(){

        $musicas = Playlist::find(1)->musicas;
        return $musicas;

    }

    public function excluirplay($id){

        $playlist = User::where('id', $id)->firstorfail()->delete();
        echo ("Playlist deletada");

    }
}
