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

Route::get('/', function () {
    return view('Landing.Home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Usuarios', 'HomeController@Usuarios')->name('Usuarios');


Route::get('/Fincas', 'FincaController@getFincas')->name('Fincas');


Route::get('/Lotes', 'LoteController@getLotes')->name('Lotes');


Route::get('/Bovinos', 'BovinoController@getBovinos')->name('Bovinos');
Route::get('/BovinosDetalles', 'BovinoController@getDetalles')->name('BovinosDetalles');



Route::get('/subasta', 'SubastaController@ViewHome')->name('subasta');
Route::get('/subasta-detalles', 'SubastaController@Detalles')->name('subasta-detalles');
Route::get('/subasta-lista', 'SubastaController@Listas')->name('subasta-lista');
 