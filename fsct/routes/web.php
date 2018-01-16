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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/admin/company', "FsctController@index");
Route::get('/admin/company/create', "FsctController@create");
Route::post('/admin/company/create', "FsctController@postCreate");
Route::get('/admin/company/{id}/edit', "FsctController@edit");
Route::post('/admin/company/{id}/edit', "FsctController@postEdit");
Route::post('/admin/company/{id}/delete', "FsctController@postDelete");