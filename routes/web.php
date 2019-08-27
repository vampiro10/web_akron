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

Route::view('industrial/productos', 'industria.products')->name('industrial_productos');
Route::view('industrial/transporte', 'industria.transporte')->name('industrial_transporte');
Route::view('industrial/detalle', 'industria.detalle')->name('industrial_detalle');
Route::view('industrial/contacto', 'industria.contacto')->name('industrial_contacto');

//Route::view('actitud', 'actitud')->name('actitud');

Route::view('empresa', 'empresa')->name('empresa');

Route::view('donde-comprar', 'donde-comprar')->name('donde-comprar');

Route::view('distribuidor', 'distribuidor')->name('distribuidor');
Route::view('dist-microsite/distribuidor', 'dist-microsite.distribuidor')->name('dist-microsite_distribuidor');
Route::view('dist-microsite/refaccionario', 'dist-microsite.refaccionario')->name('dist-microsite_refaccionario');

Route::view('blog', 'blog')->name('blog');
Route::view('detalle', 'detalle')->name('detalle');

Route::view('confirmacion-compra', 'confirmacion-compra')->name('confirmacion-compra');





// Gasolineras

Route::get('gasolinera', 'GasolinaController@index')->name('gasolinera');



// Servicios

Route::view('servicios', 'servicios.index')->name('servicios');

Route::get('servicios/zona', 'ZonaController@index')->name('zona');

Route::get('servicios/pitlub', 'PutlubController@index')->name('pitlub');







Route::view('tecnologia', 'tecnologia')->name('tecnologia');

Route::view('contacto', 'contacto')->name('contacto');

//Actitud absoluta

Route::get('actitud', 'ActitudAbsolutaController@index')->name('actitud');

Route::get('actitud/erick_ruiz', 'ActitudAbsolutaController@show_erick_ruiz')->name('erick_ruiz');

Route::get('actitud/rogelio_lopez', 'ActitudAbsolutaController@show_rogelio_lopez')->name('rogelio_lopez');

Route::get('actitud/carlos_ortiz', 'ActitudAbsolutaController@show_carlos_ortiz')->name('carlos_ortiz');

Route::get('actitud/jaime_munguia', 'ActitudAbsolutaController@show_jaime_munguia')->name('jaime_munguia');

