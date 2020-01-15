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
		            				<h2>Cari <span>dan </span></h2>
		            				<h2>temukan <span>Buku </span></h2>
		            				<h2>terbaik <span>Disini </span></h2>
				                   	<a class="shopbtn" href="#">Temukan sekarang</a>
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
		            				<h2>Cari <span>dan </span></h2>
		            				<h2>temukan <span>Buku </span></h2>
		            				<h2>terbaik <span>Disini </span></h2>
				                   	<a class="shopbtn" href="#">Temukan sekarang</a>
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
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/1.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/1.jpg') }}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single') }}">Sistem Pendidikan Finlandia</a></h4>
								<ul class="prize d-flex">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
									</ul>
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/2.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/2.jpg') }}" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single') }}">Filosofi Teras</a></h4>
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
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/3.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/3.jpg') }}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single') }}">Revolusi Industri 4.0</a></h4>
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
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/4.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/4.jpg') }}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single') }}">Who We Are</a></h4>
								<ul class="prize d-flex">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/5.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/5.jpg') }}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{ route('buku_single') }}">Educated</a></h4>
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
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/6.jpg') }}" alt="product image"></a>
								<a class="second__img animation1" href="{{ route('buku_single') }}"><img src="{{asset('assets/frontend/images/books/6.jpg') }}" alt="product image"></a>
								<div class="hot__box">
									<span class="hot-label">BEST SALER</span>
								</div>
							</div>
							<div class="product__content content--center content--center">
								<h4><a href="{{ route('buku_single') }}">Bicara Itu Ada Seninya</a></h4>
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
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		{{-- <!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area --> --}}
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
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ route('blog_single') }}">International activities of the Frankfurt Book </a></h3>
								<p>We are proud to announce the very first the edition of the frankfurt news.We are proud to announce the very first of  edition of the fault frankfurt news for us.</p>
								<div class="post__time">
									<span class="day">Dec 06, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ route('blog_single') }}">Reading has a signficant info  number of benefits</a></h3>
								<p>Find all the information you need to ensure your experience.Find all the information you need to ensure your experience . Find all the information you of.</p>
								<div class="post__time">
									<span class="day">Mar 08, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="{{ route('blog_single') }}">The London Book Fair is to be packed with exciting </a></h3>
								<p>The London Book Fair is the global area inon marketplace for rights negotiation.The year  London Book Fair is the global area inon forg marketplace for rights.</p>
								<div class="post__time">
									<span class="day">Nov 11, 18</span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i>72</a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i>27</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
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
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/1.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/2.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/3.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/4.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/5.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/6.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/7.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
				<!-- Single product start -->
				<div class="product product__style--3">
					<div class="product__thumb">
						<a class="first__img" href="{{ route('review_single') }}"><img src="{{asset('assets/frontend/images/best-sell-product/8.jpg') }}" alt="product image"></a>
					</div>
					<div class="product__content content--center">
						<div class="product__hover--content">
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Single product end -->
			</div>
		</section>
		<!-- Best Sale Area Area -->
		
		@endsection