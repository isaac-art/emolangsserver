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

Route::get('/', 'langController@welcome');

Route::post('/posttext', 'langController@posttexts');
Route::post('/postlang', 'langController@postlang');
Route::post('/posttask', 'langController@posttask');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/langs', 'langController@list');
Route::get('/lang/{id}', 'langController@showLang');
Route::get('/tasks', 'langController@tasklist');
Route::get('/task/{id}', 'langController@showtask');


Route::post('/search/{query}', 'langController@answerQuery');