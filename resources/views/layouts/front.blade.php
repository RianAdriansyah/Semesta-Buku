<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('web-title') | Semesta Buku</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/icon.png') }}">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/plugins.css') }}">
	<link rel="stylesheet" href="{{asset('assets/frontend/style.css') }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css') }}">

	<!-- Modernizer js -->
	<script src="{{asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
						<a href="{{ route('index') }}">
								<img src="{{asset('assets/frontend/images/logo/logofix.png') }}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="{{ route('index') }}">Beranda</a></li>
                            <li class="drop"><a href="{{ route('review') }}">Review</a>
									<div class="megamenu mega02">
										<ul class="item item01">
											<li class="title">Review Buku</li>
										<li><a href="{{ route('review') }}">11.11</a></li>
										<li><a href="{{ route('review') }}">Heart Decor</a></li>
										</ul>
									</div>
								</li>
                            <li class="drop"><a href="{{ route('buku') }}">Buku</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Kategori</li>
											<li><a href="#">Biografi </a></li>
											<li><a href="#">Bisnis </a></li>
											<li><a href="#">Resep Makanan </a></li>
											<li><a href="#">Gaya Hidup</a></li>
											<li><a href="#">Sejarah</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Genre</li>
											<li><a href="#">Misteri</a></li>
											<li><a href="#">Self-Improvement</a></li>
											<li><a href="#">Romantis</a></li>
											<li><a href="#">Fiksi</a></li>
											<li><a href="#">Humor</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Koleksi</li>
											<li><a href="#">How Could ? </a></li>
											<li><a href="#">11.11</a></li>
											<li><a href="#">Tanjung Kemarau</a></li>
											<li><a href="#">Ensiklopedia Sains</a></li>
											<li><a href="#">Heart Decor</a></li>
										</ul>
									</div>
								</li>
                            <li class="title"><a href="{{ route('blog') }}">Blog</a>
                            <li class="title"><a href="{{ route('about') }}">Tentang Kami</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                            <li class="shop_search"><a class="search__active" href="#"></a></li>
                            &nbsp; &nbsp; &nbsp; &nbsp;
							<li>
								{{-- <div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
							<li><a href="{{ route('index') }}">Beranda</a></li>
							<li><a href="{{ route('review') }}">Review</a></li>
							<li><a href="{{ route('buku') }}">Buku</a></li>
							<li><a href="{{ route('blog') }}">Blog</a></li>
							<li><a href="#">Tentang Kami</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Cari buku disini..">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->

		@yield('isi')

		<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
    <div class="footer-static-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__widget footer__menu">
                        <div class="ft__logo">
						<a href="{{ route('index') }}">
                                <img src="{{asset('assets/frontend/images/logo/logofix.png') }}" alt="logo">
                            </a>
                            <p>Semesta Buku menyediakan beberapa artikel tentang literasi buku, informasi buku beserta review buku yang bisa menambah referensi literatur Anda
							</p>
                        </div>
                        <div class="footer__content">
                            <ul class="social__net social__net--2 d-flex justify-content-center">
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-google"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                            </ul>
                            <ul class="mainmenu d-flex justify-content-center">
                                <li><a href="{{ route('index') }}">Beranda</a></li>
								<li><a href="{{ route('review') }}">Review</a></li>
                                <li><a href="{{ route('buku') }}">Buku</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">
                        <div class="copy__right__inner text-left">
                            <p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    {{-- <div class="payment text-right">
                        <img src="{{asset('assets/frontend/images/icons/payment.png') }}" alt="" />
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer Area -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/plugins.js') }}"></script>
	<script src="{{asset('assets/frontend/js/active.js') }}"></script>
	
</body>
</html> 