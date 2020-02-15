@extends('layouts.front')

@section('web-title')
	{{ $buku->judul }}
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title" style="color:black;">{{ $buku->judul }}</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
							<span class="breadcrumb_item active" style="color:black;">{{ $buku->judul }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							  <a href="1.jpg') }}"><img src="{{ asset('assets/img/buku/cover/'.$buku->cover)}}" alt=""></a>
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
									<h1>{{ $buku->judul }}</h1>
        								<div class="price-box">
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
										<div class="product__overview" style="margin-top: -50px;">
											<table style="table">
												<tr>
													<td style="width: 35%;">Nama Penulis</td>
													<td style="width: 5%;">: </td>
												<td>{{ $buku->penulis }}</td>
												</tr> <br>
												<tr>
													<td style="width: 35%;">Nama Penerbit</td>
													<td style="width: 5%;">: </td>
													<td>{{ $buku->penerbit }}</td>
												</tr>
												<tr>
													<td style="width: 35%;">Kategori</td>
													<td style="width: 5%;">: </td>
													<td>{{ $buku->kategori->nama_kategori }}</td>
												</tr>
												<tr>
													<td style="width: 35%;">Nomor ISBN</td>
													<td style="width: 5%;">: </td>
													<td>{{ $buku->no_isbn }}</td>
												</tr>
												<tr>
													<td style="width: 35%;">Tanggal Terbit</td>
													<td style="width: 5%;">: </td>
													<td>{{ $buku->tgl_terbit }}</td>
												</tr>
												<tr>
													<td style="width: 35%;">Jumlah Halaman</td>
													<td style="width: 5%;">: </td>
													<td>{{ $buku->jml_halaman }} Halaman</td>
												</tr>
											</table>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Sinopsis</a>
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Ulasan</a>
								
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>{!! $buku->sinopsis !!}</p>
									</div>
									
								</div>
								<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									{{-- <div class="review-fieldset">
										<h2>You're reviewing:</h2>
										<h3>Chaz Kangeroo Hoodie</h3>
										<div class="review-field-ratings">
											<div class="product-review-table">
												
											</div>
										</div>
										<div class="review_form_field">
											<div class="input__box">
												<span>Nickname</span>
												<input id="nickname_field" type="text" name="nickname">
											</div>
											<div class="input__box">
												<span>Summary</span>
												<input id="summery_field" type="text" name="summery">
											</div>
											<div class="input__box">
												<span>Review</span>
												<textarea name="review"></textarea>
											</div>
											<div class="review-form-actions">
												<button>Submit Review</button>
											</div>
										</div>
									</div> --}}
									<div class="description__attribute">
										{{-- @if ($buku->review[0])
										<p>{!! $buku->review[0]->isi !!}</p>
										@else
										<p>Tidak ada ulasan</p>
										@endif --}}
									</div>
								</div>
								<!-- End Single Tab Content -->
								<!-- Start Single Tab Content -->
	                        	<!-- End Single Tab Content -->
	                        </div>
        				</div>
						<div class="wn__related__product pt--80 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">Buku Terbaru</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									@php
										$new = \App\Buku::with('kategori')->paginate(6);
									@endphp
									@foreach ($new as $item)
										
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
												<div class="hot__box">
												<span class="hot-label">{{ $item->kategori->nama_kategori }}</span>
												</div>
											</div>
											<div class="product__content content--center">
											<h4><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></h4>
												{{-- <ul class="prize d-flex">
													<ul class="rating d-flex">
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li class="on"><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
												</ul> --}}
											</div>
										</div>
									@endforeach
									
									<!-- Start Single Product -->
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Kategori Buku</h3>
        						<ul>
									@php
									$kategori = \App\Kategori::orderBy('nama_kategori', 'asc')->paginate(50);
									@endphp
									@foreach ($kategori as $item)
										@if ($item->buku->count() > 0)
											<li><a href="{{ route('kategoribuku', $item->slug) }}">{{ $item->nama_kategori }} <span>({{ $item->Buku->count() }})</span></a></li>
										@endif
									@endforeach
        						</ul>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tag Buku</h3>
        						<ul>
									@foreach ($tag as $item)
										@if ($item->buku->count() > 0)
											
											<li><a href="{{ route('tagbuku', $item->slug) }}">{{ $item->nama_tag }}</a></li>
										@endif
									@endforeach
        						</ul>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
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
		@endsection