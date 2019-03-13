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

Route::view('greenroad', 'greenroad')->name('greenroad');
Route::view('industrial', 'industrial')->name('industrial');
Route::view('tecnologia', 'tecnologia')->name('tecnologia');
Route::view('zona', 'zona')->name('zona');
Route::view('empresa', 'empresa')->name('empresa');
Route::view('distribuidor', 'distribuidor')->name('distribuidor');
Route::view('donde-comprar', 'donde-comprar')->name('donde-comprar');
Route::view('blog', 'blog')->name('blog');
Route::view('contacto', 'contacto')->name('contacto');



