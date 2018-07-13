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

Route::get('/', function () {
  return view('index');
})->name('index');

Route::get('login', function () {
	return view('login');
})->name('login');

Route::get('home', function (){
  return view('home');
})->name('home');

Route::get('cadastro','Cadastro@cadastrar')->name('cadastro');
Route::post('registrar','Cadastro@registrar')->name('registrar');
Route::get('validar', 'Login@validar')->name('validar');
Route::get('sair', 'Login@sair')->name('sair');
Route::post('criar-pedido', 'Consulta@pedir')->name('criar-pedido');
