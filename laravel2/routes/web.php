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

/*主页面的显示*/
Route::get('/','users\HomeController@show');

/*登录页面的显示*/
Route::get('/login','users\LoginController@login');

/*获取登录信息*/
Route::post('/formdata/login','users\LoginController@loginData');

/*退出登录*/
Route::get('/logout','users\LoginController@logout');

/*注册页面的显示*/
Route::get('/register','users\RegisterController@register');

/*获取注册信息*/
Route::post('/formdata/register','users\RegisterController@registerData');

/*注册成功页面*/
Route::get('/islogin','users\HomeController@islogin');

/*登录成功页面*/
Route::get('/isregister','users\HomeController@isregister');

Route::middleware(['login'])->group(function(){

	/*个人博客页面*/
	Route::get('/blog/{id}','users\BlogController@perBlog');

	/*发布文章页面*/
	Route::get('/blog/write/show/{id}','users\BlogController@show');

	/*获取发布博客的信息*/
	Route::post('/blog/write/getData/{id}','users\BlogController@getData');

	/*发布照片页面*/
	Route::get('/blog/photo/show/{id}','users\BlogController@showPhoto');

	/*获取发布照片的信息*/
	Route::post('/blog/photo/getData/{id}','users\BlogController@getPhoto');

	/*修改博客页面*/
	Route::get('/blog/revise/{id}','users\BlogController@revise');

	/*获取修改博客页面的信息*/
	Route::post('/blog/revise/getData/{id}','users\BlogController@getRevise');

	/*删除博客*/
	Route::get('/blog/delete/{id}','users\BlogController@delete');

});

require_once("admin.php");
