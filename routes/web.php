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

Route::get("/", "UserController@index");

Route::resource("usuario", "UserController");
Route::resource("pedido", "PedidoController");
Route::resource("musica", "MusicaController");
Route::resource("logout", "LogoutController");
Auth::routes();

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::view('table', 'includes.table_pedidos_user')->name('table1');

Route::get('/home', 'HomeController@index')->name('home');
