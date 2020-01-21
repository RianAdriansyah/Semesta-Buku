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
        					<article class="blog__post d-flex flex-wrap">
        						<div class="thumb">
        							<a href="{{ route('review_single') }}">
        								<img src="{{ asset('assets/frontend/images/blog/blog-3/1.jpg') }}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
        							<h4><a href="{{ route('review_single') }}">Blog image post</a></h4>
        							<ul class="post__meta">
        								<li>Posts by : <a href="#">road theme</a></li>
        								<li class="post_separator">/</li>
        								<li>Mar 10 2018</li>
        							</ul>
        							<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
        							<div class="blog__btn">
        								<a href="{{ route('review_single') }}">read more</a>
        							</div>
        						</div>
        					</article>
        					<!-- End Single Post -->
        					<!-- Start Single Post -->
        					<article class="blog__post d-flex flex-wrap">
        						<div class="thumb">
        							<a href="{{ route('review_single') }}">
        								<img src="{{ asset('assets/frontend/images/blog/blog-3/1.jpg') }}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
        							<h4><a href="{{ route('review_single') }}">Post with Gallery</a></h4>
        							<ul class="post__meta">
        								<li>Posts by : <a href="#">road theme</a></li>
        								<li class="post_separator">/</li>
        								<li>Mar 10 2018</li>
        							</ul>
        							<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
        							<div class="blog__btn">
        								<a href="{{ route('review_single') }}">read more</a>
        							</div>
        						</div>
        					</article>
        					<!-- End Single Post -->
        					<!-- Start Single Post -->
        					<article class="blog__post d-flex flex-wrap">
        						<div class="thumb">
        							<a href="{{ route('review_single') }}">
        								<img src="{{ asset('assets/frontend/images/blog/blog-3/1.jpg') }}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
        							<h4><a href="{{ route('review_single') }}">Post with Gallery</a></h4>
        							<ul class="post__meta">
        								<li>Posts by : <a href="#">road theme</a></li>
        								<li class="post_separator">/</li>
        								<li>Mar 10 2018</li>
        							</ul>
        							<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
        							<div class="blog__btn">
        								<a href="{{ route('review_single') }}">read more</a>
        							</div>
        						</div>
        					</article>
        					<!-- End Single Post -->
        					<!-- Start Single Post -->
        					<article class="blog__post d-flex flex-wrap">
        						<div class="thumb">
        							<a href="{{ route('review_single') }}">
        								<img src="{{ asset('assets/frontend/images/blog/blog-3/1.jpg') }}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
        							<h4><a href="{{ route('review_single') }}">Blog image post</a></h4>
        							<ul class="post__meta">
        								<li>Posts by : <a href="#">road theme</a></li>
        								<li class="post_separator">/</li>
        								<li>Mar 10 2018</li>
        							</ul>
        							<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus Praesent ornare tortor amet.</p>
        							<div class="blog__btn">
        								<a href="{{ route('review_single') }}">read more</a>
        							</div>
        						</div>
        					</article>
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
        							<li><a href="#">Fashion</a></li>
        							<li><a href="#">Creative</a></li>
        							<li><a href="#">Electronics</a></li>
        							<li><a href="#">Kids</a></li>
        							<li><a href="#">Flower</a></li>
        							<li><a href="#">Books</a></li>
        							<li><a href="#">Jewelle</a></li>
        						</ul>
        					</aside>
        					<!-- End Single Widget -->
        					<!-- Start Single Widget -->
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Genre Buku</h3>
        						<ul>
        							<li><a href="#">Biography</a></li>
        							<li><a href="#">Business</a></li>
        							<li><a href="#">Cookbooks</a></li>
        							<li><a href="#">Health & Fitness</a></li>
        							<li><a href="#">History</a></li>
        							<li><a href="#">Mystery</a></li>
        							<li><a href="#">Inspiration</a></li>
        							<li><a href="#">Religion</a></li>
        							<li><a href="#">Fiction</a></li>
        							<li><a href="#">Fantasy</a></li>
        							<li><a href="#">Music</a></li>
        							<li><a href="#">Toys</a></li>
        							<li><a href="#">Hoodies</a></li>
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