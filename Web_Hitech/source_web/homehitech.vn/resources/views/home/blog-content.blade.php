@extends('layouts.master')
@section('blog-content')
		<section>
		<div class="container">
			<div class="row" style="margin-bottom: 3%;">
				<img src="images/blog/blog_banner.jpg" alt="" />
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
						@foreach($news as $key => $val)
						<div class="single-blog-post">
							<h3><a href="/blog/detail/{{$val->slug}}" >{{$val->title}}</a></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-clock-o"></i> {{substr($val->created_at,11,5)}}</li>
									<li><i class="fa fa-calendar"></i> {{substr($val->created_at,0,10)}}</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="../upload/news/{{$val->img_path}}" alt="">
							</a>
							<p>{!!$val->intro!!}</p>
							<a  class="btn btn-primary" href="/blog/detail/{{$val->slug}}">Read More</a>
						</div>
						@endforeach
						<hr>
						{{ $news->render() }}
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection