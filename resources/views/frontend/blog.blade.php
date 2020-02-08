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
                              <span class="breadcrumb_item active" style="color:black;">Blog</span>
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
        						<h2>Semua Blog</h2>
        					</div>
							<!-- Start Single Post -->
							@if ($artikel->count() > 0)
								
							
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
										<li>Dibuat oleh : <a href="#">{{ $item->user->name }}</a></li>
        								<li class="post_separator">/</li>
										<li>{{ $item->created_at->diffForHumans() }}</li>
        							</ul>
        							<p>{!! str_limit( $item->konten, $limit = 100, $end = '...') !!}</p>
        							<div class="blog__btn">
										<a href="{{ route('blog_single', $item->slug) }}">read more</a>
        							</div>
        						</div>
        					</article>
							<!-- End Single Post -->
							@endforeach
						</div><br>
						<ul>
							<li>
								{{ $artikel->links() }}
							</li>
						</ul>
						@else
						<p>Tidak ada artikel</p>
						</div>
						@endif
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__sidebar">
        					<!-- Start Single Widget -->
        					<aside class="widget search_widget">
        						<h3 class="widget-title">Cari</h3>
							<form action="{{ route('blog') }}">
        							<div class="form-input">
        								<input type="text" placeholder="Cari..." name="cariblog">
        								<button><i class="fa fa-search"></i></button>
        							</div>
        						</form>
        					</aside>
        					<!-- End Single Widget -->
        					<!-- Start Single Widget -->
        					<aside class="widget category_widget">
        						<h3 class="widget-title">Buku Terbaru</h3>
        						<ul>
									@php
										$buku = \App\Buku::orderBy('created_at', 'desc')->take(5)->get();
									@endphp
									@if ($buku->count() > 0)
										
									@foreach ($buku as $item)
									<li><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></li>
									@endforeach
									@else
									<li><p>Tidak ada buku terbaru</p></li>
									@endif
        						</ul>
        					</aside>
							<!-- End Single Widget -->
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tag</h3>
        						<ul>
									@if ($tag->count() > 0)
									@foreach ($tag as $item)
									<li><a href="#">{{ $item->nama_tag }}</a></li>
									@endforeach
										
									{{-- @foreach ($artikel as $item)
										@foreach($item->tag as $a)
									<li><a href="#">{{ $a->nama_tag }}</a></li>
										@endforeach
									@endforeach --}}
									@else
									<li><p>Tidak ada tag</p></li>
									@endif
        						</ul>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Blog Area -->

		@endsection