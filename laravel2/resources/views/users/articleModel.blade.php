<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>生活记录</title>
	<link rel="stylesheet" type="text/css" href="/css/users/articleModel.css"/>
</head>
<body>
	<div class="BODY">
		<div class="body">
			<div class="header">
				<div class="header_item"><img src="/images/users/article/together1.jpg"/></div>
				<div>语录创作</div>
				<div class="per_blog"><a href=@yield('blog')>@yield('nickName')的生活区</a></div>
				<div class="nickName">
					@yield('nickName')
				</div>
			</div>
			<div class="main">
				@if(count($errors)>0)
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				@endif
				<div class="main_body">
				<form action=@yield('action') method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden" name="id" value="@yield('artId')">
					<input class="title" type="text" name="title" placeholder="文章标题区" value="@yield('artTitle')" required="required" />
					<textarea rows="30" autofocus="true" name="content">
						@yield('artContent')
					</textarea>
					<input class="submit" type="submit" name="send" value="开始发布" />
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>