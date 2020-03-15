@extends('layouts.front')

@section('web-title')
	{{ $buku->judul }}
@endsection

@section('isi')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	
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
													@php
														$star = $buku->rating;
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
												<tr>
													<td style="width: 35%;">Rating para Pengulas</td>
													<td style="width: 5%;">: </td>
													<td>
														<div class="price-box">
															<ul class="prize d-flex">
																<ul class="rating d-flex">
																	{{-- @php
																		$star = $buku->rating;
																		$star_off = 5 - $star;



																			// $in = \App\Buku::with('review')->get();
																			$rate = $buku->review[0]->rating;
																			
																			// //COUNTING
																			$ave = array_sum($rate)/$buku->review->count();
																		
																	@endphp
																	@for ($s = 0; $s < $rate; $s++)
																		<li class="on"><i class="fa fa-star"></i></li>
																	@endfor
																	@for ($i = 0; $i < $rate; $i++)
																		<li><i class="fa fa-star"></i></li>
																	@endfor --}}
																</ul>
															</ul>
														</div>
													</td>
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
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-add" role="tab">Tambah Ulasan</a>
								
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>{!! $buku->sinopsis !!}</p>
									</div>
								</div>
								<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									<div class="description__attribute">
										@if (isset($buku->review[0]))
										<?php $count = 0; ?>
											@foreach ($buku->review as $item)
												<?php if ($count == 5) break; ?>
												@if ($item->user[0]->name  == Auth::user()->name)
												<h4 class="mt-3">Ulasan Saya : <td class="text-center"><a href="#">
													<small><i class="fas fa-pencil-alt"></i></small></a>
													
												@else
													
												<h4 class="mt-3">Rating Pengulas : 
													@endif
													@if ($item->rating == 0)
														Tidak ada rating
													@else	
													<ul class="prize__box">
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
													</ul></h4>
													@endif
													<p>{!! $item->isi !!}</p>
													<small>Dibuat oleh : {{ $item->user[0]->name }}</small>
													<hr>
												<?php $count++; ?>
												@endforeach
												<div class="row">
													<div class="col-lg-6 mx-auto pt-4">
														<a class="shopbtn" href="{{ route('review') }}" target="_blank">Lebih Banyak Ulasan</a>
													</div>
												</div>
										@else
										<p>Tidak ada ulasan</p>
										<a class="shopbtn" href="/backend/review/" target="_blank">Tambah Ulasan</a>
										@endif
									</div>
								</div>
								<div class="pro__tab_label tab-pane fade" id="nav-add" role="tabpanel">
									<div class="description__attribute">
										@role('admin||member')
										<form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
											<div class="form-row">
												<div class="form-group col-lg-6">
													<label for="">Judul Review</label>
													<input type="text" class="form-control" required name="judul">
												</div>
												<div class="form-group col-lg-6">
													<label for="">Cover</label>
													<input type="file" class="form-control" required name="cover">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-lg-6">
													<label for="">Judul Buku</label>
													{{-- @php $buku = \App\Buku::all(); @endphp --}}
													<select name="buku_id" class="form-control" required>
													<option value="{{$buku->id}}">{{ $buku->judul }}</option>
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
													<select name="tag[]" class="form-control" id="select2" style="width:100%;" required multiple>
														@foreach ($tag as $list)
													<option value="{{ $list->id }}">{{ $list->nama_tag }}</option>
														@endforeach
													</select>
												</div>
												<div class="form-group">
													<label for="">Isi</label>
													<textarea name="isi" cols="30" rows="10" class="form-control" required id="editor1"></textarea>
												</div>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</form>
											@endrole
											@guest
												
											<p>Anda harus login terlebih dahulu!</p>
											<div class="row">
												<div class="col-lg-6">
													<a class="shopbtn" href="{{ route('login') }}">Login</a>
												</div>
											</div>
											@endguest
									</div>
								</div>
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
									@foreach ($new as $last)
										
										<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
											<div class="product__thumb">
												<a class="first__img" href="{{ route('buku_single', $last->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$last->cover)}}" alt="product image"></a>
												<div class="hot__box">
												<span class="hot-label">{{ $last->kategori->nama_kategori }}</span>
												</div>
											</div>
											<div class="product__content content--center">
											<h4><a href="{{ route('buku_single', $last->slug) }}">{{ $last->judul }}</a></h4>
												{{-- <ul class="prize d-flex">
													@php
														$star = $latest->rating;
														$star_off = 5 - $star;
													@endphp
													@for ($s = 0; $s < $star; $s++)
														<li class="on"><i class="fa fa-star"></i></li>
													@endfor
													@for ($i = 0; $i < $star_off; $i++)
														<li><i class="fa fa-star"></i></li>
													@endfor
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