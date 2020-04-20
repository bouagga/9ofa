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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::resource('users', 'UserController',['except' => ['show' ,'create' ]],['as'=>'admin'])->middleware('is_admin');
Route::resource('persons', 'PersonController')->middleware('auth');
Route::resource('baskets', 'BasketController')->middleware('auth');


Route::get('importView', 'PersonController@importView')->name('importView');

Route::post('import', 'PersonController@import')->name('import');
