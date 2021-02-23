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

//TODO 削除機能
//TODO 編集が必要な箇所の追加

//ログイン後
Route::group(['prefix' => 'admin','middleware' => 'auth:admin'],function(){
    Route::get('logout','Admin\LoginController@logout')->name('admin.logout');
    Route::get('dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
    //作品管理
    Route::get('work','Admin\WorkController@index')->name('admin.work');
    Route::get('work/new','Admin\WorkController@create')->name('admin.work.create');
    Route::post('work/new','Admin\WorkController@register')->name('admin.work.register');
    Route::get('work/{id}/edit','Admin\WorkController@edit')->name('admin.work.edit');
    Route::post('work/{id}/edit','Admin\WorkController@update')->name('admin.work.update');
    //新着情報管理
    Route::get('news','Admin\NewsController@index')->name('admin.news');
    Route::get('news/new','Admin\NewsController@edit')->name('admin.news.new.get');
    Route::post('news/new','Admin\NewsController@edit')->name('admin.new.new.post');
    Route::get('news/{id}/edit','Admin\NewsController@edit')->name('admin.new.edit.get');
    Route::post('news/{id}/edit','Admin\NewsController@edit')->name('admin.new.edit.post');
    //お問い合わせ管理
    Route::get('contact','Admin\ContactController@index')->name('admin.contact');
    Route::get('contact/new','Admin\ContactController@edit')->name('admin.contact.new.get');
    Route::post('contact/new','Admin\ContactController@edit')->name('admin.contact.new.post');
    Route::get('contact/{id}/edit','Admin\ContactController@edit')->name('admin.contact.edit.get');
    Route::post('contact/{id}/edit','Admin\ContactController@edit')->name('admin.contact.edit.post');
    Route::get('contact/template','Admin\ContactController@templateIndex')->name('admin.contact.template');
    Route::get('contact/template/new','Admin\ContactController@templateEdit')->name('admin.contact.template.new.get');
    Route::post('contact/template/new','Admin\ContactController@templateEdit')->name('admin.contact.template.new.post');
    Route::get('contact/{id}/template/edit','Admin\ContactController@templateEdit')->name('admin.contact.template.edit.get');
    Route::post('contact/{id}/template/edit','Admin\ContactController@templateEdit')->name('admin.contact.template.edit.post');
    //ワールド管理
    Route::get('world','Admin\WorldController@index')->name('admin.world');
    Route::post('world/new','Admin\WorldController@edit')->name('admin.world.new.post');
    Route::patch('world/{id}/edit','Admin\WorldController@edit')->name('admin.world.edit.patch');
    //ロケーション管理
    Route::get('location','Admin\LocationController@index')->name('admin.location');
    Route::post('location/new','Admin\LocationController@edit')->name('admin.location.new.post');
    Route::patch('location/{id}/new','Admin\LocationController@edit')->name('admin.location.edit.patch');
    //ハウスサイズ管理
    Route::get('size','Admin\SettingController@size')->name('admin.size');
    Route::post('size/new','Admin\SettingController@edit')->name('admin.size.new.post');
    Route::patch('size','Admin\SettingController@edit')->name('admin.size.edit.patch');
});
