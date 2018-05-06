<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\type;

class ClassController extends Controller
{
    /*分类页面信息的提取*/
    public function getData(Request $request){
        $this->validate($request,[
            
        ],[

        ]);
    	$name = $request->input('class');
    	$cla = new type;
    	$cla->name = $name;
    	if($cla->save())
    	{
    		return back()->with('isclass','增加分类成功');
    	}else{
    		return back()->with('isclass','增加分类失败');
    	}
    }

    /*分类页面的显示*/
    public function class(){
    	return view('admin.class');
    }
}
