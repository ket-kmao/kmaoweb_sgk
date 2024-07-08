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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    // users routes
    Route::resource('user', 'UserController')->except(['destroy', 'show']);
    Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete');
    Route::get( 'user/reset' ,'UserController@reset_password')->name('user.reset');
    Route::post( 'user/reset/save', 'UserController@save_password')->name('user.save');


    // about us routes
    Route::resource('aboutus', 'AboutusController')->except(['destroy', 'show']);
    // Events routes
    Route::resource('event', 'EventController')->except(['destroy', 'show']);
});
