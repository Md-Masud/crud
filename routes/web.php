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

//Route::get('/',function(){
	//return view('welcome');
//});
//Route::name('backend')->namespace('backend')->prifix()->('admin')->group(function(){
	
//})

Auth::routes();
//Route::get('/index','create@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('addpost','create@add')->name('addpost');
Route::get('post','create@addpost')->name('teache');
Route::post('store/add','create@store')->name('store.add');
Route::get('/','create@index');
Route::get('view/create/{id}','create@view');
Route::get('delete/create/{id}','create@delete');
Route::post('update/create{id}','create@update')->name('update.create');
Route::get('ed/create/{id}','create@edit');
Route::get('index','create@index')->name('index');
