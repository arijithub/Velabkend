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
    return view('pages/mainhome');
});

Route::get('/admin', 'VelaController@index');
Route::get('/product', 'VelaController@producthome');
Route::post('/save-user','VelaController@save_user')->name('saveUser');
Route::get('/proedit/{id}', 'VelaController@proshow');
Route::post('/updpro','VelaController@save_pro')->name('updpro');
Route::get('/prodel/{id}', 'VelaController@delpro');

