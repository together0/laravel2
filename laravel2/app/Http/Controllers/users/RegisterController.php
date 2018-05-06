<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\users\person;

class RegisterController extends Controller
{
    //
    /*提取注册页面的信息*/
    public function registerData(Request $request){
        $request->flash();
        $this->validate($request, [
            'nickName' => 'required|regex:/\w{2,10}/',
            'userName' => 'required|regex:/\d{10}/',
            'pass' => 'required|regex:/\w{8,16}/',
            'pass' => 'same:passagain'
        ],[
            'nickName.required' => '昵称不能为空',
            'nickName.regex' => '昵称为2到10位的字母数字或下划线',
            'userName.required' => '用户名不能为空',
            'userName.regex' => '用户名为10位的数字',
            'pass.required' => '密码不能为空',
            'pass.same' => '两次密码不一致',
            'pass.regex' => '密码为8到16位的字母数字或下划线'
        ]);
        $per = new person();
        $per->nickName = $request->input('nickName');
        $per->userName = $request->input('userName');
        $per->password = $request->input('pass');
        $res = person::where('nickName','=',$per->nickName)->first();
        if($res)
        {
            return back()->withErrors("昵称已存在!");
        }
        else
        {
            $res=person::where('userName','=',$per->userName)->first();
            if($res)
            {
                return back()->withErrors("用户名已存在!");
            }
            elseif($per->save())
            {
                return view('users.login');
            }
            else{
                return back()->withErrors("系统出错啦...");
            }
        }
    }
    /*注册页面的显示*/
    public function register(){
        return view('users.register');
    }
}
