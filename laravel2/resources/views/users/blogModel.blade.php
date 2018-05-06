<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>
	<script type="text/javascript" src="/js/users/blogModel.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/users/blogModel.css"/>
</head>
<body>
	<div class="BODY">
		<div class="body">
			<div class="header">
				<div class="header_item"><img src="/images/users/personal/together1.jpg"/></div>
				<div class="header_item">
					<a href="/">首页</a>
					<a href=@yield('urlArt')>生活语录</a>
					<a href=@yield('urlPic')>照片一波</a>
					<a href="/logout">退出登录</a>
				</div>
			</div>
			<div class="main">
				<div class="main_head">
					<div class="main_head_img"><img src="/images/users/personal/icon.jpg"/>
					</div>
					<div class="person_info">
						<div>@yield('name')</div>
						<div>文章数:@yield('artCnt')</div>
						<div>照片墙数量:@yield('picCnt')</div>
					</div>
				</div>
				<div class="main_body">
					<div class="main_body_type">
						<script type="text/javascript">
							var divArt = document.getElementById("main_body_article");
							var divPic = document.getElementById("main_body_photo");
							var photo = document.getElementById("photo");
							var photoImg = document.getElementById("photoImg");
							divArt.style.display="";
							divPic.style.display="none";
							photo.style.display="none";
							photoImg.style.display="none";
							function showArt(){
								var divArt = document.getElementById("main_body_article");
								var divPic = document.getElementById("main_body_photo");
								var photo = document.getElementById("photo");
								var photoImg = document.getElementById("photoImg");
								divArt.style.display="";
								divPic.style.display="none";
								photo.style.display="none";
								photoImg.style.display="none";
							}
							function showPic(){
								var divArt = document.getElementById("main_body_article");
								var divPic = document.getElementById("main_body_photo");
								var photo = document.getElementById("photo");
								var photoImg = document.getElementById("photoImg");
								divArt.style.display="none";
								divPic.style.display="";
								photo.style.display="";
								photoImg.style.display="";
							}
						</script>
						<input id="butArt" type="button" value="所发文章" onclick="showArt()" />
						<input id="butPic" type="button" value="所发照片"
						onclick="showPic()" />
					</div>
					@if(session('info'))
						<script type="text/javascript">
							alert('{{session('info')}}');
						</script>
					@endif
					<div class="main_body_article" id="main_body_article">
						@section('articles')
            			@show
					</div>
					<div class="main_body_photo" id="main_body_photo">
						@section('photos')
						@show
					</div>
					<div id="page">
						{!!$articles->links()!!}
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>