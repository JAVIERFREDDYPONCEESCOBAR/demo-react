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

Route::get('/', function(){
    return view('auth.login');
});
Auth::routes();
//Route::get('/usuario', 'UsuarioController@index')->name('usua');
//Route::get('/admin', 'admin\AdminController@index')->name('admin');
Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
     //Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
     Route::resource('/users', 'UsersController');
     Route::resource('/productos', 'ProductosController');
     Route::resource('/producto', 'ProductosClienteController');
     Route::get('/', 'AdminController@index')->name('admin');
});

//Route::view('some/route/needing/quickbooks/token/before/using', 'some.view')->middleware('quickbooks');

Route::namespace('usuario')->prefix('usuario')->name('usuario.')->middleware('auth')->group(function(){
//Route::namespace('usuario')->prefix('usuario')->name('usuario.')->middleware('can:manage-users')->group(function(){
    Route::resource('/usuario', 'UsuarioController',['except'=>['show','create','store','destroy']]);
    Route::get('/', 'UsuarioController@index')->name('usuario');
    Route::get('/carrito', 'CarritoController@index')->name('carrito');
    Route::get('/productos', 'ProductosController@index')->name('productos');
    Route::get('/pedidos', 'PedidosController@index')->name('pedidos');
});