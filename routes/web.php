<?php

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
Route::get("/", "UsuarioController@index");

Route::resource("usuario", "UsuarioController");
Route::resource("servidor", "ServidorController");

Route::get("Entrar", "UsuarioController@login")->name('login');
Route::get("Home", "UsuarioController@home")->name('home');
Route::get("Validando", "UsuarioController@valid")->name('valid');
Route::get("Pedido", "UsuarioController@pedir_musica")->name('pedir_musica');
Route::get("Sair", "UsuarioController@exit")->name('exit');
Route::get("Cadastramento", function(){return view('layouts.cadastroMusica');})->name('cadastroMusica');
Route::view('table', 'includes.table_pedidos_user')->name('table1');
