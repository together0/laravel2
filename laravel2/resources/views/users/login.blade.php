@extends('users.homeModel')

@section('title','登录')

@section('cssUrl','/css/users/login.css')

@section('loginOrRegister')
    <div class="div_img">
      <img src="/images/users/login/background.jpg">
    </div>
    <div class="content">
      @if( count($errors)>0 )
        <div class="error">
          <ul>
            @foreach( $errors->all() as $error )
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div>
        <span><a href="{{asset('/register')}}">没有账号?前去注册</a></span>
      </div>
      <div>
        <form action="{{asset('/formdata/login')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="item">
            <div class="div1">用户名</div>
            <div class="div2">
              <input type="test" name="userName" value="{{old('userName')}}" placeholder="用户名为10位的数字" />
            </div>
          </div>
          <div class="item">
            <div class="div1">密码:</div>
            <div class="div2"><input type="password" name="pass" placeholder="密码为8到16位的字母数字或下划线"/></div>
          </div>
          <div class="item">
            <div class="Bregister"><input type="submit" name="register" value="登录"/></div>
          </div>
        </form>
      </div>
    </div>
@endsection