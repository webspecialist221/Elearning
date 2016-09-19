<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','mainController@index');
Route::get('courses/{id}','mainController@courses');


// admin Routes
Route::group(['middleware' => 'web'] , function () {

Route::auth();	
Route::get('playlist_view','adminController@index');
Route::get('playlist_form','adminController@create');
Route::post('playlist_form','adminController@store');
Route::get('/admin','adminController@admin');
Route::get('/delete/{id}','adminController@destroy');

});





