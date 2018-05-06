<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/users/homeModel.css">
	<link rel="stylesheet" type="text/css" href="@yield('cssUrl')"/>
</head>
<body>
	<div class="BODY">
		<div class="body">
			<div class="header">
				<div class="header_item"><img src="/images/users/personal/together1.jpg"/></div>
				<div class="header_item">
					<a href="/">首页</a>
					<a href='/login'>登录</a>
					<a href="/register">注册</a>
				</div>
			</div>
			<div class="main">
				<div class="main_head">
					<div class="main_head_img"><img src="/images/users/home/together1.jpg"/></div>
					<div class="main_head_img"><img src="/images/users/home/together2.jpg"/></div>
					<div class="main_head_img"><img src="/images/users/home/together3.jpg"/></div>
					<div class="main_head_img"><img src="/images/users/home/together4.jpg"/></div>
				</div>
				<div class="main_body">
					@section('loginOrRegister')
					@show
				</div>
			</div>
			<div class="footer"><a href="http://www.miitbeian.gov.cn">鲁ICP备18012400号-2</a>
			</div>
		</div>
	</div>
</body>
</html>