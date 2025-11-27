<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\registroController::Class,'paginaInicial']);
Route::get('/cadastrar',[\App\Http\Controllers\registroController::Class,'cadastrar']);
Route::get('/cadastrar/salvar',[\App\Http\Controllers\registroController::Class,'inserir']);
Route::get('/consultar',[\App\Http\Controllers\registroController::Class,'consultar']);
Route::get('/editar/{id}',[\App\Http\Controllers\registroController::Class,'editar']);
Route::get('/atualizar/{id}',[\App\Http\Controllers\registroController::Class,'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\registroController::Class,'excluir']);
Route::get('/cadastrarUsuario',[\App\Http\Controllers\usuarioController::Class,'cadastrarUsuario']);
Route::get('/cadastrarUsuario/salvar',[\App\Http\Controllers\usuarioController::Class,'inserirUsuario']);
Route::get('/consultarUsuario',[\App\Http\Controllers\usuarioController::Class,'consultarUsuario']);
Route::get('/editarUsuario/{id}',[\App\Http\Controllers\usuarioController::Class,'editarUsuario']);
Route::get('/atualizarUsuario/{id}',[\App\Http\Controllers\usuarioController::Class,'atualizarUsuario']);
Route::get('/excluirUsuario/{id}',[\App\Http\Controllers\usuarioController::Class,'excluirUsuario']);
Route::get('/login',[\App\Http\Controllers\usuarioController::Class,'login']);