<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Semesta Buku</title>
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
							<a href="index.html">
								<img src="{{asset('assets/frontend/images/logo/logo.png') }}" alt="logo images">
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
										<li><a href="{{ route('review') }}">Buku 1</a></li>
										<li><a href="{{ route('review') }}">Buku 2</a></li>
										</ul>
									</div>
								</li>
                            <li class="drop"><a href="{{ route('buku') }}">Buku</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Kategori</li>
											<li><a href="#">Biography </a></li>
											<li><a href="#">Business </a></li>
											<li><a href="#">Cookbooks </a></li>
											<li><a href="#">Health & Fitness </a></li>
											<li><a href="#">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Genre</li>
											<li><a href="#">Mystery</a></li>
											<li><a href="#">Religion & Inspiration</a></li>
											<li><a href="#">Romance</a></li>
											<li><a href="#">Fiction/Fantasy</a></li>
											<li><a href="#">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Koleksi</li>
											<li><a href="#">Science </a></li>
											<li><a href="#">Fiction/Fantasy</a></li>
											<li><a href="#">Self-Improvemen</a></li>
											<li><a href="#">Home & Garden</a></li>
											<li><a href="#">Humor Books</a></li>
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
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
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
								</div>
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