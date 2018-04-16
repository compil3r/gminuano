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

Route::get('login', 'HomeController@login');
Route::get('inicio', 'HomeController@inicio');
Route::get('recados', 'HomeController@recados');
Route::get('recado/novo', 'HomeController@recadoNovo');
Route::get('recado/ler', 'HomeController@recadoLer');
Route::get('contatos', 'HomeController@contatos');