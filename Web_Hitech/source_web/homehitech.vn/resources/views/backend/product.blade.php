@extends('backend.main')
@section('css')
<link rel="stylesheet" href="{{asset('backend/js/datatables/datatables.css')}}" type="text/css" />
@endsection
@section('content')
<section class="vbox">
    <section class="scrollable padder">
    	<br>
        <div class="m-b-md">
	      <a href="{{route('admin.product.add')}}" class="btn btn-s-md btn-primary m-b-none"><i class="fa fa-plus"></i> Thêm</a>
        </div>
        <section class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables" id="product">
                    <thead>
                        <tr>
                            <th width="20%">Tên sản phẩm</th>
                            <th width="15%">Mã sản phẩm</th>
                            <th width="15%">Công Suất</th>
                            <th width="15%">Kích thước</th>
                            <th width="15%">Khoét lỗ</th>
                            <th width="15%">Giá</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody> </tbody>
                </table>
            </div>
        </section>
    </section>
</section>
@endsection
@section('script')
<script src="{{asset('backend/js/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
var data= "{{$data}}";
console.log(data);
var oTable = $('#product').dataTable( {
      "bProcessing": true,
      "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
      "sPaginationType": "full_numbers",
      "aoColumns": [
        { "mData": "ten_sanpham" },
        { "mData": "ma_sanpham" },
        { "mData": "cong_suat" },
        { "mData": "kich_thuoc" },
        { "mData": "khoet_lo" },
        { "mData": "gia" }
      ]
    } );
oTable.row.add(data);
</script>
@endsection