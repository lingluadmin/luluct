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
    return view('welcome');
});


Route::get('vlog',function(){
    return view('vlog');
});

# vlog
Route::group(['prefix'=>'vlog', 'namespace'=>'Vlog'], function () {
    Route::any('/daka',  ['as' => 'vlog.daka',  'uses' => 'DakaController@daka']);
    Route::any('/share', ['as' => 'vlog.share', 'uses' => 'ShareController@share']);
    Route::any('/stady', ['as' => 'vlog.stady', 'uses' => 'StadyController@stady']);
});
