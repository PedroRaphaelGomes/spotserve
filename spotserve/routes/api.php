<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\PlaylistMusicaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user',[Controller::class,'criar']);

Route::post('/playlists', [PlaylistController::class,'criar']);
Route::get('/playlists/listar', [PlaylistController::class,'listar']);
Route::get('/playlists', [PlaylistController::class,'vermusicas']);
Route::delete('/playlists{id}', [PlaylistController::class,'excluirplay']);

Route::post('/planos', [PlanoController::class,'criar']);
Route::get('/planos', [PlanoController::class,'listar']);

Route::post('/musicas', [MusicaController::class,'adiciona']);
Route::get('/musicas', [MusicaController::class,'listar']);
Route::delete('/musicas{id}', [MusicaController::class,'excluirmusica']);

Route::post('/adicionar',[PlaylistMusicaController::class,'adicionar']);
Route::get('/acessa',[PlaylistMusicaController::class,'acessar']);


//Route::get('/posts/{id}', [PostsController::class, 'visualizar']);
//Route::post('/posts', [PostsController::class, 'criar']);
//Route::get('/posts', [PostsController::class, 'listar']);
//Route::delete('/posts/{id}', [PostsController::class,'excluir']);
