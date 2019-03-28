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
//后台首页
Route::get('/admin', 'Admins\IndexController@create')->name('index');
//后台用户逻辑
Route::resource('users', 'Admins\UsersController');
