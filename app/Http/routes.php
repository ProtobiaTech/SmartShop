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


// 首页仪表盘
Route::get('/', 'HomeController@dashboard');


// 用户
Route::controller('users', 'UserController');

// 会员
Route::controller('member', 'MemberController');

// 门店
Route::controller('shop', 'ShopController');
