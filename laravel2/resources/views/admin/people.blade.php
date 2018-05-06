@extends('admin.index')

@section('content')
<style type="text/css">
.result-content{
    position: relative;
}
#page{
position: absolute;
bottom: -50px;
left: 500px;
}
#page ul{
    display: flex;
}
#page li{   
    list-style: none;
    margin-right: 20px; 
}
#page li a{
    text-decoration: none;
    color: #C11212;
    border: 1px solid #FFFFFF;
    background-color: #FFFFFF;
}
#page li a:hover{
    color: #FFFFFF;
    border: 1px solid #C11212;
    background-color: #C11212;
}
</style>
<div class="result-wrap">
    <form name="myform" id="myform" method="post">
        <div class="result-content">
            <table class="result-tab" width="100%">
                <tr>
                    <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                    <th>排序</th>
                    <th>id</th>
                    <th>nickName</th>
                    <th>userName</th>
                    <th>password</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                @foreach($peoples as $people)
                <tr>
                    <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                    <td>
                        <input name="ids[]" value="59" type="hidden">
                        <input class="common-input sort-input" name="ord[]" value="0" type="text">
                    </td>
                    <td>{{$people->id}}</td>
                    <td>{{$people->nickName}}</td>
                    <td>{{$people->userName}}</td>
                    <td>{{$people->password}}</td>
                    <td>{{$people->created_at}}</td>
                    <td>
                        <a class="/people/revise" href="#">修改</a>
                        <a class='/people/delete' href="#">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <div id="page">{!!$peoples->links()!!}</div>
        </div>
    </form>
</div>    
@endsection