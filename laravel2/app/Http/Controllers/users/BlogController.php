<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\users\person;
use App\Model\users\article;
use App\Model\users\photo;
use Storage;

class BlogController extends Controller
{
    //
    /*具体到个人博客页面*/
    public function perBlog($id){
        $per_id = (int)$id;
        $data = person::where('id','=',$per_id)->first();
        $arts = article::where('per_id','=',$per_id)->paginate(6);
        $artCnt = article::where('per_id',$per_id)->count();
        $pics = photo::where('per_id','=',$per_id)->paginate(20);
        $picCnt = photo::where('per_id',$per_id)->count();
        return view('users.blog',[
            'title' => $data->nickName.'的生活区',   
            'name' => $data->nickName,
            'urlArt' => '/blog/write/show/' . $id,  //id == per_id
            'urlPic' => '/blog/photo/show/' . $id,  //id == per_id
            'articles' => $arts, 
            'photos' => $pics,
            'artCnt' => $artCnt,
            'picCnt' => $picCnt,
        ]);
    }
    /*显示发布文章页面*/
    public function show(Request $request){
        $per_id = explode('/',$request->path());
        $per_id = (int)array_pop($per_id);
        $perData = person::where('id','=',$per_id)->first();
        return view('users.article',[
            'perData' => $perData,
            'nickName' => $perData->nickName,
            'action' => '/blog/write/getData/'.(string)$per_id,
            'blog' => '/blog/'.(string)$per_id
        ]);
    }
    /*获取发布博客时的信息*/
    public function getData(Request $request){
        $this->validate($request,[
            'content' => 'required'
        ],[
            'content.required' => '文本区不能为空'
        ]);
        $per_id = explode('/',$request->path());
        $per_id = (int)array_pop($per_id);
        $art = new article;
        $art->per_id = $per_id;
        $art->title = $request->input('title');
        $art->content = $request->input('content');
        if($art->save())
        {
            $path = '/blog/'.(string)$per_id;
            return redirect($path);
        }else{
            echo "fail";
        }
    }
    /*显示发布照片页面*/
    public function showPhoto(Request $request){
        $per_id = explode('/',$request->path());
        $per_id = (int)array_pop($per_id);
        $data = person::where('id','=',$per_id)->first();
        return view('users.photo',[
            'nickName' => $data->nickName,
            'action' => '/blog/photo/getData/'.(string)$per_id,
            'blog' => '/blog/'.(string)$per_id
        ]);
    }
    /*获取发布照片时的信息*/
    public function getPhoto(Request $request){
        $per_id = explode('/',$request->path());
        $per_id = (int)array_pop($per_id);
        $flag = array(0,0,0);
        if($request->hasFile('picture1')){
            $flag[0] = 1;
        }
        if($request->hasFile('picture2')){
            $flag[1] = 1;
        }
        if($request->hasFile('picture3')){
            $flag[2] = 1;
        }
        for($i=0;$i<3;$i++)
        {
            if($flag[$i] != 1)
                continue;
            /*创建文件的存放文件夹*/
            $path = './Uploads/'.date('Ymd');
            /*提取文件的后缀*/
            $suffix = $request->file('picture'.(string)($i+1))
            ->getClientOriginalExtension();
            /*创建文件的名称*/
            $fileName = time() . rand(10000,99999) . '.' . $suffix;
            /*移动文件到指定path*/
            $request->file('picture'.(string)($i+1))->move($path,$fileName);
            /*保存文件到指定path*/
            // $file_path = $request->file('picture'.(string)($i+1))->store($path);
            /*存放到数据库*/
            $art = new photo;
            $art->per_id = $per_id;
            $art->type = '1';
            $art->url = trim($path.'/'.$fileName,'.');
            if($art->save())
            {
                $path = '/blog/'.(string)$per_id;
                return redirect($path);
            }else{
                echo "fail";
            }
        }
    }
    /*显示修改文章页面*/
    public function revise(Request $request){
        $art_id = explode('/',$request->path());
        $art_id = (int)array_pop($art_id);
        $artData = article::findOrFail($art_id);
        $perData = person::findOrFail($artData->per_id);
        return view('users.revise',[
            'perData' => $perData,
            'artData' => $artData,
            'nickName' => $perData->nickName,
            'action' => '/blog/revise/getData/'.(string)$art_id,
            'blog' => '/blog/'.(string)$artData->per_id
        ]);
    }
    /*获取修改文章页面的信息*/
    public function getRevise(Request $request)
    {
        $this->validate($request,[
            'content' => 'required'
        ],[
            'content.required' => '文本区不能为空'
        ]);
        $art_id = (int)$request->input('id');
        $artData = article::findOrFail($art_id);
        $artData->title = $request->input('title');
        $artData->content = $request->input('content');
        if($artData->save())
        {
            return redirect('/blog/'.(string)$artData->per_id)
            ->with('info','修改文章成功');
        }
        else{
            return back()->with('info','修改文章失败');
        }
    }
    /*删除文章*/
    public function delete($id)
    {
        $art_id = (int)$id;
        article::destroy($art_id);
        return back();
    }
}
