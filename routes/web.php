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
// Route::view('productos', 'productos')->name('productos');

Route::view('micuenta', 'micuenta')->name('micuenta');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('mapa-sitio', 'mapa-sitio')->name('mapa-sitio');
Route::view('crear-cuenta', 'crear-cuenta')->name('crear-cuenta');
Route::view('carrito', 'carrito')->name('carrito');
Route::view('greenroad', 'greenroad')->name('greenroad');
Route::view('industrial', 'industrial')->name('industrial');
Route::view('actitud', 'actitud')->name('actitud');
Route::view('gasolinera', 'gasolinera')->name('gasolinera');
Route::view('empresa', 'empresa')->name('empresa');
Route::view('donde-comprar', 'donde-comprar')->name('donde-comprar');
Route::view('distribuidor', 'distribuidor')->name('distribuidor');
Route::view('blog', 'blog')->name('blog');



Route::view('tecnologia', 'tecnologia')->name('tecnologia');
Route::view('zona', 'zona')->name('zona');
Route::view('contacto', 'contacto')->name('contacto');



