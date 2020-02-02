@extends('layouts.front')

@section('web-title')
	Blog Kami
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color:black;">Halaman Blog</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active" style="color:orange;">Blog</span>
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
        						<h2>Blog Kami</h2>
        					</div>
							<!-- Start Single Post -->
							@foreach ($artikel as $item)
								
        					<article class="blog__post d-flex flex-wrap">
								<div class="thumb">
									<a href="{{ route('blog_single', $item->slug) }}">
        								<img src="{{ asset('assets/img/artikel/cover/'.$item->cover)}}" alt="blog images">
        							</a>
        						</div>
        						<div class="content">
								<h4><a href="{{ route('blog_single', $item->slug) }}">{{ $item->judul }}</a></h4>
        							<ul class="post__meta">
									<li>Posts by : <a href="#">{{ $item->user->name }}</a></li>
        								<li class="post_separator">/</li>
									<li>{{ $item->created_at->diffForHumans() }}</li>
        							</ul>
        							<p>{!! str_limit( $item->konten, $limit = 100, $end = '...') !!}</p>
        							<div class="blog__btn">
										<a href="{{ route('blog_single', $item->slug) }}">read more</a>
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
									@php
										$kategori = \App\Kategori::all();
									@endphp
									@foreach ($kategori as $item)
								<li><a href="#">{{ $item->nama_kategori }}</a></li>
									@endforeach
        						</ul>
        					</aside>
							<!-- End Single Widget -->
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tag Buku</h3>
        						<ul>
									@foreach ($tag as $item)
								<li><a href="#">{{ $item->nama_tag }}</a></li>
									@endforeach
        						</ul>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Blog Area -->

		@endsection