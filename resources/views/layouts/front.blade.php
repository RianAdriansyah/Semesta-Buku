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
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{{asset('assets/backend/dataTables/datatables.min.css ') }}">
	
	{{-- Font Awesome Backend --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
	{{-- iziToast --}}
	<link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
	

   <style>
    .ratingf{
      /* position: absolute;
      top: 50%;
      left: 50%; */
      margin-left: -20px;
      transform: translate(-50%, -50%) rotateY(180deg);
      display: flex;
    }
    .ratingf input{
      display: none;
    }
    .ratingf label{
      display: block;
      cursor: pointer;
      width: 20px;
      /* background: #ccc; */
    }
    .ratingf label:before{
      content: '\f005';
      font-family: fontAwesome;
      position: relative;
      display: block;
      font-size: 20px;
      margin-top: -20px;
      opacity: 1;
    }
    .ratingf label:after{
      content: '\f005';
      font-family: fontAwesome;
      position: relative;
      display: block;
      font-size: 20px;
      color: #1f9cff;
      top: 0;
      opacity: 0;
      transition: .5s;
      text-shadow: 0 2px 5px rgba(0, 0, 0, .5)
    }
    .ratingf label:hover:after{
      opacity: 1;
    }
    .ratingf label:hover:after,
    .ratingf label:hover ~ label:after,
    .ratingf input:checked ~ label:after{
      opacity: 1;
    }
  </style>

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
                            <li class="drop"><a href="{{ route('review') }}">Ulasan</a>
									<div class="megamenu mega02">
										<ul class="item item01">
											<li class="title">Ulasan Buku</li>
											@php
												$review = \App\Review::with('buku')->orderBy('created_at', 'desc')->paginate(5);
											@endphp
											@if ($review->count() > 0)
												
											@foreach ($review as $item)
											
										<li><a href="{{ route('review_single', $item->slug) }}"><strong>{{ $item->buku->judul }}</strong>  oleh : {{ $item->user[0]->name }}</a></li>
											@endforeach
											@else
											<li>Tidak ada ulasan</li>

											@endif
										</ul>
									</div>
								</li>
                            <li class="drop"><a href="{{ route('buku') }}">Buku</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Kategori</li>
											@php
												$kategori = \App\Kategori::orderBy('nama_kategori', 'asc')->paginate(5);
											@endphp
											@if ($kategori->count() > 0)
												
											@foreach ($kategori as $item)
												@if ($item->buku->count() > 0)
												<li><a href="{{ route('kategoribuku', $item->slug) }}">{{ $item->nama_kategori }}</a></li>
												@endif
											@endforeach
											@else
											<li>Tidak ada kategori</li>

											@endif
										</ul>
										<ul class="item item03">
											<li class="title">Tag</li>
											@php
												$tag = \App\Tag::orderBy('created_at', 'desc')->paginate(5);
											@endphp
											@if ($tag->count() > 0)
												
												@foreach ($tag as $item)
													@if ($item->buku->count() > 0)
													<li><a href="{{ route('tagbuku', $item->slug) }}">{{ $item->nama_tag }}</a></li>
													@endif
												@endforeach
											@else
											<li>Tidak ada tag</li>

											@endif
										</ul>
										<ul class="item item03">
											<li class="title">Koleksi Buku</li>
											@php
											$buku = \App\Buku::with('kategori')->orderBy('created_at', 'desc')->paginate(5);
										@endphp
										@if ($buku->count() > 0)
											
										@foreach ($buku as $item)
										
										<li><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></li>
										@endforeach
										@else
										<li>Tidak ada buku</li>

										@endif
									</ul>
									</div>
								</li>
                            <li class="title"><a href="{{ route('blog') }}">Blog</a>
                            <li class="title"><a href="{{ route('about') }}">Tentang</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a>
                            &nbsp; &nbsp; &nbsp; &nbsp;
							<li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
											<a href="{{ route('reviewsaya.index') }}"><span>Review Saya</span></a>
											</strong>
										</div>
										<div class="switcher-currency">
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														@guest
															
														<span><a href="{{ route('login') }}">Masuk</a></span>
														@if (Route::has('register'))
														<span><a href="{{ route('register') }}">Buat Akun</a></span>
														@endif
														@else
														<span><a href="{{ route('logout') }}" onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">Logout 
															<form id="logout-form" action="{{ route('logout') }}"
															method="POST" style="display: none;">
															@csrf
														</form></a></span>
														@endguest
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
							<li><a href="{{ route('about') }}">Tentang</a></li>
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
		<form id="search_mini_form" class="minisearch" action="{{ route('buku') }}">
				<div class="field__search">
					<input type="text" placeholder="Cari buku disini.." name="caribuku">
					<div class="action">
					<a href="{{ route('buku') }}"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>Tutup</span>
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
                        <div class="footer__content" style="margin-left:30px;">
                            <ul class="social__net social__net--2 d-flex justify-content-center">
                                <li><a href="https://www.facebook.com/rian.adriansyah.98434"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/RianAd01"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber"><i class="bi bi-youtube"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/rian-adriansyah-5b07371a0/"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                            <ul class="mainmenu d-flex justify-content-center">
                                <li><a href="{{ route('index') }}">Beranda</a></li>
								<li><a href="{{ route('review') }}">Ulasan</a></li>
                                <li><a href="{{ route('buku') }}">Buku</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('about') }}">Tentang</a></li>
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

 
         <!-- Modal -->
         <div class="modal fade" id="tambahModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Tambah Ulasan</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				<form action="{{ route('reviewsaya.store') }}" method="POST" enctype="multipart/form-data">
				  @csrf
				  <div class="form-row">
					<div class="form-group col-lg-6">
						<label for="">Judul Review</label>
						<input type="text" class="form-control" required name="judul">
					</div>
					<div class="form-group col-lg-6">
						<label for="">Cover</label>
						<input type="file" class="form-control" name="cover">
					</div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-lg-6">
						<label for="">Judul Buku</label>
						@php $buku = \App\Buku::all(); @endphp
						<select name="buku_id" class="form-control" required>
						  <option value="">-- Pilih Buku --</option>
						  @foreach ($buku as $data)
						<option value="{{ $data->id }}">{{ $data->judul }}</option>
						  @endforeach
						</select>
					  </div>
					  <div class="form-group col-lg-6 ratingf mt-5">
						<p style="transform: translate(-50%, -50%) rotateY(180deg);">Rating</p>
						<input type="radio" name="rating" id="star1" value="5"><label for="star1"></label>
						<input type="radio" name="rating" id="star2" value="4"><label for="star2"></label>
						<input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
						<input type="radio" name="rating" id="star4" value="2"><label for="star4"></label>
						<input type="radio" name="rating" id="star5" value="1"><label for="star5"></label>
					  </div>
				  </div>
						<div class="form-group">
						  <label for="">Quotes</label>
						  <input type="text" class="form-control" name="quotes">
						  <small class="text-danger">*Opsional</small>
					  </div>
					  <div class="form-group>
						<label for="">Tag</label>
						  @php $tag = \App\Tag::all(); @endphp
						  <select name="tag[]" class="form-control" required id="select2" style="width:100%;" required multiple>
							@foreach ($tag as $list)
						  <option value="{{ $list->id }}">{{ $list->nama_tag }}</option>
							@endforeach
						  </select>
					  </div>
					  <div class="form-group">
						  <label for="">Isi</label>
						  <textarea name="isi" cols="30" rows="10" class="form-control" required id="editor1"></textarea>
					  </div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					  <button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				  </form>
				</div>
			</div>
		</div> 

	<!-- //Main wrapper -->
	<!-- JS Files -->
	<script src="{{asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/popper.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{asset('assets/frontend/js/plugins.js') }}"></script>
	<script src="{{asset('assets/frontend/js/active.js') }}"></script>
	
	<!-- Modernizer js -->
	<script src="{{asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<script src="{{asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
	<script src="{{asset('assets/backend/dataTables/datatables.min.js') }}"></script>

	  <script>
      $(document).ready(function() {
		$('#table_id').DataTable();
        $('#select2').select2();
      });
    </script>

  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
  </script>

	@stack('script')

<script>
	
</script> 

{{-- SweetAlert --}}
@include('sweetalert::alert')

</body>
</html> 