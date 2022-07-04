<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class MusicaController extends Controller
{
    //
    public function listar(){
        $musicas = Musica::all();
        return response($musicas,200);
    }

    public function adiciona(Request $request){

        $musica = new Musica();
        $musica->nome = $request->nome;
        $musica->url = $request->url;
        $s = $musica->save();

        if($s){
            return response("Musica adicionada", 201);
        }
        return response("Ocorreu algum erro",400);

    }

    public function excluirmusica($id){

        $musica = Musica::where('id', $id)->firstorfail()->delete();
        echo ("Musica deletada");

    }

}
