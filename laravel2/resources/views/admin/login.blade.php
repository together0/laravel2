<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Together后台登陆</title>
    <link href="/css/admin/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>together后台管理</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="/admin/login/getData" method="post">
                {{csrf_field()}}
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="userName" value="wangyuhua" id="user" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" id="pwd" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="/" target="_blank">返回首页</a></p>
</div>
</body>
</html>