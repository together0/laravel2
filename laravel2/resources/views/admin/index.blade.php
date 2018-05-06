<html>
<head>
    <meta charset="UTF-8">
    <title>Together后台</title>
    <link rel="stylesheet" type="text/css" href="/css/admin/common.css"/>
    <link rel="stylesheet" type="text/css" href="/css/admin/main.css"/>
    <script type="text/javascript" src="/js/admin/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/">首页</a></li>
                <li><a href="/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/people"><i class="icon-font">&#xe006;</i>管理用户</a></li>
                        <li><a href="/admin/class"><i class="icon-font">&#xe006;</i>新增分类</a></li>
                        <li><a href="/admin/class"><i class="icon-font">&#xe006;</i>管理分类</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-wrap">
        <div class="result-wrap">
            <div class="result-title">
                <h1>管理员操作</h1>
            </div>
            <div class="result-content">
                @section('content')
                @show
            </div>
        </div>
    </div>
</div>
</body>
</html>