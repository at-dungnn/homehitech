@extends('backend.main')
@section('content')
	<section class="scrollable padder">
    	<br>
{{--         <div class="m-b-md">
	      <a href="{{route('admin.category.add')}}" class="btn btn-s-md btn-primary m-b-none"><i class="fa fa-plus"></i> Thêm</a>
        </div> --}}
        <section class="panel panel-default">
        	<div class="panel-body">
	        	@if (Session::has('status'))            
		            <div class="alert {{ Session::get('class') }} alert-dismissable">
		                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		                {{ Session::get('status') }}
		            </div>
		        @endif
        		<form role="form" class="form-product form-horizontal" method="POST" action="{{route('admin.users')}}" enctype="multipart/form-data">
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
        </section>
    </section>
@endsection