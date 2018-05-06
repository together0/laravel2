<?php 

/*登陆页面的显示*/
Route::get('/admin/login','admin\LoginController@login');

/*登陆页面信息的提取*/
Route::post('/admin/login/getData','admin\LoginController@getData');

/*增加分类页面的显示*/
Route::get('/admin/class','admin\ClassController@class');

/*增加分类页面信息的提取*/
Route::post('/admin/class/getData','admin\ClassController@getData');

/*显示用户页面的显示*/
Route::get('/admin/people','admin\PeopleController@people');

/*显示用户页面的显示*/
Route::get('/admin/people/revise','admin\PeopleController@revise');

/*显示用户页面的显示*/
Route::get('/admin/people/revise','admin\PeopleController@revise');

?>