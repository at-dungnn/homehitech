@extends('backend.main')
@section('css')
<link rel="stylesheet" href="{{asset('backend/js/datatables/datatables.css')}}" type="text/css" />
@endsection
@section('content')
	<section class="scrollable padder">
    	<br>
        <div class="m-b-md">
	      <a href="{{route('admin.users.add')}}" class="btn btn-s-md btn-primary m-b-none"><i class="fa fa-plus"></i> Thêm tài khoản</a>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <section class="panel panel-default">
        	<div class="panel-body">
	        	@if (Session::has('status'))            
		            <div class="alert alert-success alert-dismissable">
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                {{ Session::get('status') }}
		            </div>
		        @endif
                <div class="row wrapper">
                    <div class="col-md-12">
                        <form role="form" class="form-product form-horizontal" method="POST" action="{{route('admin.users')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Họ và tên
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="fullname" class="fullname form-control" value="{{Auth::user()->name}}" maxlength="255">
                                    @if ($errors->has('fullname'))
                                        <div class="help-block">
                                            <strong>{{ $errors->first('fullname') }}</strong>
                                        </div>
                                    @endif
                                </div>                               
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Email
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="email form-control" value="{{Auth::user()->email}}" disabled="disabled">
                                </div>                               
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Mật khẩu hiện tại
                                </label>
                                <div class="col-sm-8">
                                    <input type="password" name="cur_password" class="cur_password form-control" maxlength="255">
                                    @if ($errors->has('cur_password'))
                                        <div class="help-block">
                                            <strong>{{ $errors->first('cur_password') }}</strong>
                                        </div>
                                    @endif
                                </div>                               
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    Mật khẩu mới
                                </label>
                                <div class="col-sm-8">
                                    <input type="password" name="new_password" class="new_password form-control" maxlength="255">
                                    @if ($errors->has('new_password'))
                                        <div class="help-block">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                        </div>
                                    @endif
                                </div>                               
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submmit" class="btn btn-primary btn-save">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
        		
                
        	</div>  
        </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <section class="panel panel-default">
            <div class="panel-body">
            @if(Auth::user()->id=="1")
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light" data-ride="datatables" id="users">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="25%">Họ và tên</th>
                                <th width="25%">Email</th>
                                <th width="25%">Ngày tạo</th>
                                <th width="15%">Delete</th>
                            </tr>
                        </thead>
                        <tbody> </tbody>
                    </table>
                </div>
                @endif
            </div>
        </section>
        </div>
    </div>
    </section>
@endsection
@section('script')
<script src="{{asset('backend/js/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
$('#users').dataTable( {
    "ajax": "{{route('admin.users.list')}}",
      "bProcessing": true,
      "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
      // "sPaginationType": "full_numbers",
      "aoColumns": [
        { "data": "id"},
        { "data": "name"},
        { "data": "email"},
        { "data": "created_at",
        render : function(data){
            return data.substr(0, 10);
        }},
        { "data": "id",
        render:function(data){
            return "<span class='delete-user' data-id='"+data+"'><i class='glyphicon glyphicon-remove'></i></span>";
        }},
      ]
});
$(document).on("click",".delete-user",function(){
    var id= $(this).attr('data-id');
    var _this=this;
    if(confirm("Bạn chắc chắn muốn xóa tài khoản này không?")){
        $.ajax({
            url:'{{route('admin.users.delete')}}',
            data:{id:id},
            dataType:'json',
            type:'post',
            success: function(res){
                if(res.status=='ok'){
                    $(_this).closest('tr').remove();
                    showNotification("Xóa tài khoản thành công!","danger");
                }else{
                    alert('Delete Fail');
                }
            }
        })
    }
});
</script>
@endsection