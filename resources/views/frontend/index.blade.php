@extends('layouts.front')

@section('web-title')
	Beranda
@endsection

@section('isi')
	
        <!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2 style="color: white;">Cari <span style="color:orange">dan </span></h2>
		            				<h2 style="color: white;">temukan <span style="color:orange">Buku </span></h2>
		            				<h2 style="color: white;">terbaik <span style="color:orange">Disini </span></h2>
								<a class="shopbtn" href="{{ route('buku') }}">Temukan sekarang</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2 style="color: white;">Cari <span style="color:orange">dan </span></h2>
		            				<h2 style="color: white;">ulas <span style="color:orange">Buku </span></h2>
		            				<h2 style="color: white;">terbaik <span style="color:orange">Disini </span></h2>
								<a class="shopbtn" href="{{ route('review') }}">Temukan sekarang</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	
        </div>
        <!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Buku <span class="color--theme">Terbaru</span></h2>
							@if ($buku->count() > 0)
							<p>Disini sudah ada beberapa buku terbaru yang sudah terbit ke publik</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
						
					@foreach ($buku as $item)
					
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">{{ $item->kategori->nama_kategori }}</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></h4>
								<ul class="prize d-flex">
									<ul class="rating d-flex">
										@php
												$star = $item->rating;
												$star_off = 5 - $star;
											@endphp
											@for ($s = 0; $s < $star; $s++)
												<li class="on"><i class="fa fa-star"></i></li>
											@endfor
											@for ($i = 0; $i < $star_off; $i++)
												<li><i class="fa fa-star"></i></li>
											@endfor
										</ul>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						@else
						<p>Tidak ada buku</p>
						@endif
					<!-- Start Single Product -->
					
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		

		
		<!-- Start Best Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Buku <span class="color--theme">Populer</span></h2>
							@if ($best->count() > 0)
								
							<p>Beberapa buku yang sedang hangat dan populer tersedia di bawah ini</p>
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					<!-- Start Single Product -->
					@foreach ($best as $item)
					
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">{{ $item->kategori->nama_kategori }}</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></h4>
								<ul class="prize d-flex">
									<ul class="rating d-flex">
										@php
												$star = $item->rating;
												$star_off = 5 - $star;
											@endphp
											@for ($s = 0; $s < $star; $s++)
												<li class="on"><i class="fa fa-star"></i></li>
											@endfor
											@for ($i = 0; $i < $star_off; $i++)
												<li><i class="fa fa-star"></i></li>
											@endfor
										</ul>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						@else
						<p>Tidak ada buku</p>
						@endif
					<!-- Start Single Product -->
					
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start Recent Post Area -->
		<section class="wn__recent__post bg--gray ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Blog <span class="color--theme">Ini</span></h2>
							@if ($artikel->count() > 0)
								
							<p>Beberapa artikel yang berkaitan dengan literasi buku/novel disajikan disini</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					@foreach ($artikel as $post)
					
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ route('blog_single', $post->slug) }}">{!! str_limit( $post->judul, $limit = 26, $end = '...') !!}</a></h3>
								<p>{!! str_limit( $post->konten, $limit = 100, $end = '...') !!}</p>
								<div class="post__time">
									<span class="day">{{$post->created_at->diffForHumans()}}</span>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@else
					<p>Tidak ada artikel</p>
					@endif
				</div>
			</div>
		</section>
		<!-- End Recent Post Area -->
		<!-- Best Sale Area -->
		<section class="best-seel-area pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center pb--50">
							<h2 class="title__be--2">Ulasan <span class="color--theme">Buku </span></h2>
							@if ($review->count() > 0)
								
							<p>Beberapa review buku Nasional/Internasional tersedia disini untuk referensi Anda</p>
							<a class="shopbtn" href="{{ route('review') }}">Geser Foto untuk lebih banyak</a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				<!-- Single product start -->
				@foreach ($review as $rev)
				
				<div class="product product__style--3">
					<div class="product__thumb">
						<button style="border:none; background:none; padding:0;" data-toggle="tooltip" data-placement="bottom" title="{{ $rev->buku->judul }}"><a class="first__img" href="{{ route('review_single', $rev->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$rev->buku->cover)}}" alt="product image"></a></button>
						
					</div>
					<div class="product__content content--center">
						{{-- <div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star"></i></li>
								<li class="on"><i class="fa fa-star"></i></li>
								<li class="on"><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
						</div> --}}
					</div>
				</div>
				@endforeach
				@else
				<p>Tidak ada ulasan</p>
				@endif
				<!-- Single product end -->
			</div>
		</section>
		<!-- Best Sale Area Area -->
		
		@endsection