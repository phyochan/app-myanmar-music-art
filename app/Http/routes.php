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



Route::get('/','DownloadCountController@show');

Route::post('/{id}','DownloadCountController@downloadApp');

Route::get('/app/upload/{id}','DownloadCountController@uploadshow');

Route::post('/app/upload/{id}','DownloadCountController@Apkupdate');


Route::get('/show/id','DownloadCountController@showId');


