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
		            				<h2 style="color: white;">Cari <span>dan </span></h2>
		            				<h2 style="color: white;">temukan <span>Buku </span></h2>
		            				<h2 style="color: white;">terbaik <span>Disini </span></h2>
				                   	<a class="shopbtn" style="color:white;" href="#">Temukan sekarang</a>
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
		            				<h2 style="color: white;">Cari <span>dan </span></h2>
		            				<h2 style="color: white;">temukan <span>Buku </span></h2>
		            				<h2 style="color: white;">terbaik <span>Disini </span></h2>
				                   	<a class="shopbtn" style="color:white;" href="#">Temukan sekarang</a>
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
										{{-- @foreach ($item->rating as $rate)
									<li class="on" value="{{ $rate }}"><i class="fa fa-star-o"></i></li>
										@endforeach --}}
									</ul>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Start Single Product -->
					
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--10  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Semua <span class="color--theme">Buku</span></h2>
							<p>Dibawah ini adalah semua buku yang tersedia di blog kami, kami menyajikan
								buku buku yang berkualitas</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					{{-- <div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a>
                        </div>
					</div> --}}
				</div>
				<div class="tab__container mt--10">
					<!-- Start Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/1.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/2.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{ route('buku_single') }}">Ghost</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/3.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/9.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="{{ route('buku_single') }}">Ghost</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/5.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/6.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Doctor Wldo</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/7.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/8.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Doctor Wldo</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/9.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/7.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Lando</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/11.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/5.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Lando</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/8.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/4.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/12.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/7.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
							</div>
							<div class="single__product">
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/3.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/5.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/2.jpg') }}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/7.jpg') }}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('buku_single') }}">Bowen Greenwood</a></h4>
											<ul class="prize d-flex">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</ul>
										</div>
									</div>
								</div>
								<!-- Start Single Product -->
								
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start Recent Post Area -->
		<section class="wn__recent__post bg--gray ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Blog <span class="color--theme">Kami</span></h2>
							<p>Beberapa artikel yang berkaitan dengan literasi buku/novel disajikan disini</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					@foreach ($artikel as $post)
						
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ route('blog_single') }}">{{ $post->judul }} </a></h3>
								<p>{!! str_limit( $post->konten, $limit = 100, $end = '...') !!}</p>
								<div class="post__time">
									<span class="day">{{$post->created_at->diffForHumans()}}</span>
								</div>
							</div>
						</div>
					</div>
					@endforeach
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
							<h2 class="title__be--2">Review <span class="color--theme">Buku </span></h2>
							<p>Beberapa review buku Nasional/Internasional tersedia disini untuk referensi Anda</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slider center">
				<!-- Single product start -->
				@foreach ($review as $rev)
					
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{ asset('assets/img/buku/cover/'.$rev->buku->cover)}}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						{{-- <div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div> --}}
					</div>
				</div>
				@endforeach
				<!-- Single product end -->
			</div>
		</section>
		<!-- Best Sale Area Area -->
		
		@endsection