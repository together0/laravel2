@extends('users.blogModel')

@section('title',$title)

@section('name',$name)

@section('urlArt',$urlArt)

@section('urlPic',$urlPic)

@section('articles')
	@foreach($articles as $art)
		<div class="article">
			<div class="title">
				<div><img src="/images/users/personal/titleIcon.png"/></div>
				<div>{{$tit = substr($art->title,0,20)}}</div>
			</div>
			<div class="content">
				{{$con = substr($art->content,0,60)}}			
			</div>
			<div class="operate">
				<a class="operateA" href="/blog/revise/{{$art->id}}">编辑</a>
				<a class="operateA" href="/blog/delete/{{$art->id}}">删除</a>
			</div>
		</div>
	@endforeach
@endsection

@section('photos')
	@foreach($photos as $pic)
		<div class="photo" id="photo">
			<img id="photoImg" src={{$pic->url}}/>
		</div>
	@endforeach
@endsection

@section('artCnt',$artCnt)

@section('picCnt',$picCnt)