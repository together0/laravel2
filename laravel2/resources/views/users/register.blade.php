@extends('users.homeModel')

@section('title','注册')

@section('cssUrl','/css/users/register.css')

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
        <span><a href="{{asset('/login')}}">已有账号?直接登录</a></span>
      </div>
      <div>
        欢迎注册,每一天都享受生活
      </div>
      <div>
        <form action="{{asset('/formdata/register')}}" method="post" enctype="multipart/form-data">
          <div></div>
          {{csrf_field()}}
          <div class="item">
            <div class="div1">昵称</div>
            <div class="div2"><input type="test" name="nickName" value="{{old('nickName')}}" placeholder="昵称" /></div>
          </div>
          <div class="item">
            <div class="div1">用户名</div>
            <div class="div2"><input type="test" name="userName" value="{{old('userName')}}" placeholder="用户名为10位的数字" /></div>
          </div>
          <div class="item">
            <div class="div1">密码</div>
            <div class="div2"><input type="password" name="pass" value="{{old('pass')}}" placeholder="密码为8到16位的字母数字或下划线" /></div>
          </div>
          <div class="item">
            <div class="div1">确认密码</div>
            <div class="div2"><input type="password" name="passagain" value="{{old('passagain')}}"/></div>
          </div>
          <div class="item">
            <div class="Bregister"><input type="submit" name="login"/ value="注册"></div>
          </div>
        </form>
      </div>
    </div>
@endsection