<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\users\person;

class HomeController extends Controller
{
    /*主页面的显示*/
    public function show(){
    	return view('users.home');
    }
    /*判断是否注册成功*/
    public function islogin(){
        return '登录成功';
    }
    /*判断是否登录成功*/
    public function isregister(){
        return '注册成功';
    }
}
