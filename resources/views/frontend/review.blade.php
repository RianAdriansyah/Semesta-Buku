@extends('layouts.front')

@section('web-title')
	Review
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color:black;">Review Buku</h2>
                            <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active" style="color:darkorange;">Review</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Blog Area -->
        <div class="page-blog bg--white section-padding--lg blog-sidebar right-sidebar">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="blog-page">
        					<div class="page__header">
        						<h2>Review Buku</h2>
        					</div>
							<!-- Start Single Post -->
							@foreach ($review as $rev)
								
        					<article class="blog__post d-flex flex-wrap">
								<div class="thumb">
									<a href="{{ route('review_single', $rev->slug) }}">
        								<img src="{{ asset('assets/img/review/cover/'.$rev->cover)}}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
								<h4><a href="{{ route('review_single', $rev->slug) }}">{{ $rev->judul }}</a></h4>
        							<ul class="post__meta">
									<li>Posts by : <a href="#">{{ $rev->user->name }}</a></li>
        								<li class="post_separator">/</li>
									<li>{{ $rev->created_at->diffForHumans() }}</li>
        							</ul>
        							<p>{!! str_limit( $rev->isi, $limit = 150, $end = '...') !!}</p>
        							<div class="blog__btn">
										<a href="{{ route('review_single', $rev->slug) }}">read more</a>
        							</div>
        						</div>
        					</article>
							@endforeach
        					<!-- End Single Post -->
        					
        				</div>
        				<ul class="wn__pagination">
        					<li class="active"><a href="#">1</a></li>
        					<li><a href="#">2</a></li>
        					<li><a href="#">3</a></li>
        					<li><a href="#">4</a></li>
        					<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
        				</ul>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__sidebar">
        					<!-- Start Single Widget -->
        					<aside class="widget search_widget">
        						<h3 class="widget-title">Search</h3>
        						<form action="#">
        							<div class="form-input">
        								<input type="text" placeholder="Search...">
        								<button><i class="fa fa-search"></i></button>
        							</div>
        						</form>
        					</aside>
        					<!-- End Single Widget -->
        					<!-- Start Single Widget -->
        					<aside class="widget category_widget">
        						<h3 class="widget-title">Kategori Buku</h3>
        						<ul>
									@foreach ($kategori as $item)
										
								<li><a href="#">{{ $item->nama_kategori }}</a></li>
									@endforeach
        						</ul>
        					</aside>
        					<!-- End Single Widget -->
        					<!-- Start Single Widget -->
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Genre Buku</h3>
        						<ul>
									@foreach ($genre as $item)
										
								<li><a href="#">{{ $item->nama_genre }}</a></li>
									@endforeach
        						</ul>
        					</aside>
        					<!-- End Single Widget -->
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Blog Area -->

		@endsection