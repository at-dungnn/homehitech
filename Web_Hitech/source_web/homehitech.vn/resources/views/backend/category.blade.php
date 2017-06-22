@extends('backend.main')
@section('content')
<section class="vbox">
    <section class="scrollable padder">
    	<br>
        <div class="m-b-md">
	      <a href="{{route('admin.category.add')}}" class="btn btn-s-md btn-primary m-b-none"><i class="fa fa-plus"></i> Thêm</a>
        </div>
        <section class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables" id="category">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="25%">Tên danh mục</th>
                            <th width="20%">Ngày tạo</th>
                            <th width="20%">Ngày cập nhật</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                    @foreach($category as $key=>$val)
                    	<tr>
                    		<td>{{$val->id}}</td>
                    		<td>{{$val->name}}</td>
                    		<td>{{$val->created_at}}</td>
                    		<td>{{$val->updated_at}}</td>
                    		<td><i class="fa fa-edit"></i> <i class="glyphicon glyphicon-remove"></i></td>
                    	</tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </section>
</section>
@endsection