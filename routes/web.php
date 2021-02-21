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

//フロント側
Route::get('/', function () {
    return view('welcome');
});

//管理側
//ログイン前
Route::group(['prefix' => 'admin'],function(){
    Route::get('login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login','Admin\LoginController@authenticate')->name('admin.authenticate');
});

//ログイン後
Route::group(['prefix' => 'admin','middleware' => 'auth:admin'],function(){
    Route::get('logout','Admin\LoginController@logout')->name('admin.logout');
    Route::get('dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
});
