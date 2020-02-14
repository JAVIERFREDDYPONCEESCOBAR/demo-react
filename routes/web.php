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
//Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){
     Route::resource('/users', 'UsersController', ['except'=>['show','create','store']]);
     Route::get('/', 'AdminController@index')->name('admin');
});
//Route::view('some/route/needing/quickbooks/token/before/using', 'some.view')->middleware('quickbooks');