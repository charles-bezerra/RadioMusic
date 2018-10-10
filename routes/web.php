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

Route::get("login", "UsuarioController@login")->name('login');
Route::get("home", "UsuarioController@home")->name('home');
Route::get("valid", "UsuarioController@valid")->name('valid');
Route::get("pedido", "UsuarioController@pedir_musica")->name('pedir_musica');
Route::get("exit", "UsuarioController@exit")->name('exit');

Route::view('table', 'includes.table_pedidos_user')->name('table1');