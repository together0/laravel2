<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*登录页面信息的提取*/
    public function getData(Request $request){
    	if($request->input('userName') == 'wangyuhua'
    	 &&$request->input('password') == 'gaoyang')
    	{
    		return view('admin.index');
    	}else{
    		return back();
    	}
    }

    /*登陆页面的显示*/
    public function login(){
    	return view('admin.login');
    }
}
