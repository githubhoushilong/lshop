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

// Route::get('/', 'PagesController@root')->name('root')->middleware('verified');//测试中间件
Route::get('/', 'PagesController@root')->name('root');//首页路由

Auth::routes(['verify' => true]);//laravel认证路由,括号里为添加的邮箱验证
