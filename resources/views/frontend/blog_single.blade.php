@extends('layouts.front')

@section('web-title')
	{{ $artikel->judul }}
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title" style="color:black;">{{ $artikel->judul }}</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
							<span class="breadcrumb_item active" style="color:black;">{{ $artikel->judul }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="{{ asset('assets/img/artikel/cover/'.$artikel->cover)}}" alt="blog images">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
									<h2>{{ $artikel->judul }}</h2>
										<div class="blog-date-categori">
											<ul>
											<li>{{ $artikel->created_at->diffForHumans() }}</li>
											<li><p title="Posts by boighor">oleh : {{ $review->user->name }}</p></li><br>
											</ul>
										</div>
									</div>
									<div class="post_content">
										<p>{!! $artikel->konten !!}</p>

									</div>
									<ul class="blog_meta">
											
										<li>Tag : 
											<span>
											@foreach ($tag as $list)
											{{ $list->nama_tag }}, 
											@endforeach
											</span>
										</li>
									</ul>
								</div>
							</article>
							@include('layouts.disqus')
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Cari Artikel</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Cari...">
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
									@if ($buku->count() > 4)
										
									@foreach ($buku as $item)
									<li><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></li>
									@endforeach
									@else
									<li><p>Tidak ada buku terbaru</p></li>
									@endif
								</ul>
							</aside>
							<!-- End Single Widget -->
							
							<!-- Start Single Widget -->
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tag Buku</h3>
        						<ul>
        							@foreach ($tag as $item)
										
								<li><a href="#">{{ $item->nama_tag }}</a></li>
									@endforeach
        						</ul>
        					</aside>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>

		@endsection