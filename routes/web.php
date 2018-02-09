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

// 首页路由
Route::get('/', function () {
    return view('welcome');
});

// 账号认证相关路由
Auth::routes();

// 登录后个人主页路由
Route::get('/home', 'HomeController@index')->name('home');
