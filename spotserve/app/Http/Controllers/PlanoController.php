<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
    //
    public function criar(Request $request){

        $plano = new Plano();
        $plano->plano = $request->plano;
        $plano->contas = $request->contas;
        $plano->descricao = $request->descricao;
        $s = $plano->save();

        if($s){
            return response("Criado Plano com sucesso", 201);
        }
        return response("Ocorreu algum erro, tente novamente", 400);
        
    }

    public function listar(){
        $planos = Planos::all();
        return response($planos,200);
    }
}
