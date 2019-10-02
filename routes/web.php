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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::resource('/alergije', 'AlergijeController');
Route::resource('/insert','InsertController');
Route::get('/pretrazivanjeime','PretrazivanjeImeController@index');
Route::get('/pretrazivanjeprezime','PretrazivanjePrezimeController@index');
Route::resource('/update','UpdateController');
Route::get('/droge','DrogeController@index');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/pretrazivanjeime/action', 'PretrazivanjeImeController@action')->name('pretrazivanjeime.action');
Route::get('/pretrazivanjeprezime/action', 'PretrazivanjePrezimeController@action')->name('pretrazivanjeprezime.action');
Route::get('/droge/action', 'DrogeController@action')->name('droge.action');