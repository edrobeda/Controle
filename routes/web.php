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

Route::get('/', 'SiteController@getIndex')->name('home');
Route::get('/logout', 'SiteController@getLogout')->name('logout');

Route::get('/login', 'SiteController@getLogin')->name('login');
Route::post('/login', 'SiteController@postLogin');

Route::group(['middleware' => 'managerAuth', 'prefix' => 'manager'], function(){
    Route::get('/', 'ManagerController@getDashboard')->name('manager');
    Route::get('dashboard', 'ManagerController@getDashboard');
    Route::get('/user', 'manager\userController@getIndex');
});


