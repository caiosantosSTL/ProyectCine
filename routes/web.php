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
    return view('welcome');
});

Route::get('/inicio', 'InicioController@inicio')->name('inicio');

Auth::routes();

Route::get('/home', 'InicioController@inicio')->name('home');
Route::get('/verPelicula/{id}', 'InicioController@verPelicula')->name('verPelicula');









// rotas de pagina *************************************
Route::get('golistpeli', function(){
    return view('/lista-pelicula');
});

Route::get('golistsalahora', function(){
    return view('/lista-sala-hora');
});

Route::get('gobutacas', function(){
    return view('/butacas');
});

// end rotas de pagina *************************************
