@extends('admin.index')

@section('content')
@if(session('isclass'))
    <script type="text/javascript">
        alert('{{session('isclass')}}');
    </script>
@endif
<form action="/admin/class/getData" method="post" id="myform" name="myform" enctype="multipart/form-data">
	{{csrf_field()}}
    <table class="insert-tab" width="100%">
        <tbody>
        </tr>
            <tr>
                <th><i class="require-red"></i>分类名称：</th>
                <td>
                    <input class="common-text required" id="title" name="class" size="50" type="text" required="required" placeholder="php">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection