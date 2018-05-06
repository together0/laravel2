<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>来一波照片</title>
	<link rel="stylesheet" type="text/css" href="/css/users/photoModel.css"/>
</head>
<body>
	<div class="BODY">
		<div class="body">
			<div class="header">
				<div class="header_item"><img src="/images/users/article/together1.jpg"/></div>
				<div>照片墙</div>
				<div class="per_blog"><a href=@yield('blog')>@yield('nickName')的生活区</a></div>
				<div class="nickName">
					@yield('nickName')
				</div>
			</div>
			<div class="main">
				<div class="main_body">
					<form action=@yield('action') method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<div>
							<div class="divFile">
								<input class="file" type="file" name="picture1" value="photo" />
								<img class="fileIcon" src="images/add.png"/>
							</div>
							<div class="divFile">
								<input class="file" type="file" name="picture2" value="photo" />
								<img class="fileIcon" src="images/add.png"/>
							</div>
							<div class="divFile">
								<input class="file" type="file" name="picture3" value="photo" />
								<img class="fileIcon" src="images/add.png"/>
							</div>
						</div>
						<input class="submit" type="submit" name="send" value="开始发布" />
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>