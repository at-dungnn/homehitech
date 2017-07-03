@extends('layouts.master')
@section('main-content')

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>H</span>-OME ONLINE</h1>
									<h2>Đèn trang trí</h2>
									<p>Sản phẩm chất lượng, mẫu mã đẹp, có bảo hành</p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>H</span>-OME ONLINE</h1>
									<h2>Đèn chiếu sáng</h2>
									<p>Sản phẩm chất lượng, mẫu mã đẹp, có bảo hành</p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>H</span>-OME ONLINE</h1>
									<h2>Đèn chùm</h2>
									<p>Sản phẩm chất lượng, mẫu mã đẹp, có bảo hành</p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slide2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" id="accordian">
							@foreach($menu as $menu_value)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#{{$menu_value['id']}}">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												{{$menu_value['name']}}
											</a>
										</h4>
									</div>
									<div id="{{$menu_value['id']}}" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												@foreach($category as $category_value)
													@if ($menu_value['id'] == $category_value['parent_id'])
														<li class="data_product" data-id ="{{$category_value['id']}}" ><a href="#">{{$category_value['name']}}</a></li>
													@endif
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Danh sách sản phẩm</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/dentrangtri_1_resize.jpg" alt="" />
											<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/dentrangtri_2_resize.jpg" alt="" />
										<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/dentrangtri_3_resize.jpg" alt="" />
										<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/dentrangtri_4_resize.jpg" alt="" />
										<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/dentrangtri_5_resize.jpg" alt="" />
										<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/dentrangtri_6_resize.jpg" alt="" />
										<h2>Mã : KSTH-COB-5</h2>
											<p>Công suất : 20w</p>
											<p>Kích thước : 85x85</p>
											<p>Khoét lỗ : 80</p>
											<p>Giá 170,000đ</p>
											<p>Giảm giá : 147,000đ</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
				
					
				</div>
			</div>
		</div>
	</section>
@endsection

