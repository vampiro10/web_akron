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

Route::view('/', 'homev2')->name('home');
Route::resource('/productos', 'ProductController');

Route::view('micuenta', 'micuenta')->name('micuenta');
Route::view('mapa-sitio', 'mapa-sitio')->name('mapa-sitio');
Route::view('crear-cuenta', 'crear-cuenta')->name('crear-cuenta');
Route::view('carrito', 'carrito')->name('carrito');
Route::view('greenroad', 'greenroad')->name('greenroad');
Route::view('industrial', 'industrial')->name('industrial');
Route::view('actitud', 'actitud')->name('actitud');
Route::view('empresa', 'empresa')->name('empresa');
Route::view('donde-comprar', 'donde-comprar')->name('donde-comprar');
Route::view('distribuidor', 'distribuidor')->name('distribuidor');
Route::view('blog', 'blog')->name('blog');


// Gasolineras
Route::get('gasolinera', 'GasolinaController@index')->name('gasolinera');

// Servicios 
Route::view('servicios', 'servicios.index')->name('servicios');
Route::get('servicios/zona', 'ZonaController@index')->name('zona');
Route::get('servicios/pitlub', 'PutlubController@index')->name('pitlub');



Route::view('tecnologia', 'tecnologia')->name('tecnologia');
Route::view('contacto', 'contacto')->name('contacto');



