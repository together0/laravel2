<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\users\person;

class LoginController extends Controller
{
    //
    /*提取登录页面的信息*/
    public function loginData(Request $request){
        $this->validate($request, [
            'userName' => 'required|regex:/\d{10}/',
            'pass' => 'required|regex:/\w{8,16}/'
        ],[
            'userName.required' => '用户名不能为空',
            'userName.regex' => '用户名为10位的数字',
            'pass.required' => '密码不能为空',
            'pass.regex' => '密码为8到16位的字母数字或下划线'
        ]);
        $userName = $request->input('userName');
        $password = $request->input('pass');
        $res = person::where([
            'userName' => $userName,
            'password' => $password
        ])->first();
        session(['uid'=>$res->id]);
        if($res){   
            $id = (string)$res->id;
            return redirect('/blog/'.$id);
        }else{
            return back()->withErrors('账号或密码错误!');
        }
    }
    /*登录页面的显示*/
    public function login(){
        return view('users.login');
    }
    /*退出登录*/
    public function logout(Request $request){
        $request->session()->forget('uid');
        return redirect('/');
    }
}
