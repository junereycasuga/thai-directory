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
    return redirect()->route('citizen::list');
});

Route::group(['as' => 'citizen::', 'prefix' => 'citizens'], function () {
    Route::get('/', 'CitizenController@list')->name('list');
    Route::get('create', 'CitizenController@create')->name('create');
    Route::post('create', 'CitizenController@create')->name('insert');
    Route::get('{id}', 'CitizenController@details')->name('details');
});
