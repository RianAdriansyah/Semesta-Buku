@extends('layouts.front')

@section('web-title')
Ulasan Buku
@endsection

@section('isi')

<style>
	.widget.search_widget {
  margin: 0 0 30px; }
  .widget.search_widget .form-input {
    position: relative; }
    .widget.search_widget .form-input input {
      border: 1px solid #e1e1e1;
      height: 40px;
      padding: 0 44px 0 20px;
      width: 100%;
      outline: none; }
    .widget.search_widget .form-input button {
      background: transparent none repeat scroll 0 0;
      border: 0 none;
      color: #222;
      font-size: 12px;
      padding: 0 12px;
      position: absolute;
      right: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
              transform: translateY(-50%); }
</style>

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title" style="color:black;">Ulasan Buku</h2>
					<nav class="bradcaump-content">
					<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active" style="color:black;">Review</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
				<div class="shop__sidebar">
					<!-- Start Single Widget -->
					<aside class="widget search_widget">
						<h3 class="wedget__title">Cari Ulasan</h3>
					<form action="{{ route('review') }}">
							<div class="form-input">
								<input type="text" placeholder="Cari..." name="carireview">
								<button type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</aside>
					<!-- End Single Widget -->
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Buku Terbaru</h3>
						<ul>
							@php
								$buku = \App\Buku::orderBy('created_at', 'desc')->paginate(5);
							@endphp
							@if ($buku->count() > 0)

								@foreach ($buku as $item)
									@if ($item->count() > 0)
									<li><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></li>
									@endif
								@endforeach
							@else
							<li><p>Tidak ada kategori</p></li>
							@endif
						</ul>
					</aside>
				
					<aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">Tag Ulasan</h3>
						<ul>
							@if ($tag->count() > 0)
								@foreach ($tag as $item)
									@if ($item->review->count() > 0)
									<li><a href="{{ route('tagreview', $item->slug) }}">{{ $item->nama_tag }}</a></li>
									@endif
								@endforeach
							@else
							<li><p>Tidak ada tag</p></li>
							@endif
						</ul>
					</aside>
				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="row">
					<div class="col-lg-12">
						<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
							<div class="shop__list nav justify-content-center" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
							</div>
							<p>Menampilkan {{ $review->count() }} dari {{ \App\Review::all()->count() }} ulasan</p>
							<div class="orderby__wrapper">
								<span>Urutkan</span>
								<select class="shot__byselect" name="sort" onchange="pindah(this)">
									<option disabled selected>Pilih Urutan</option>
									<option value=" {{ url('review') }}">Urutan awal</option>
									<option value=" {{url('review?sort=baru')}}">Waktu (Terbaru)</option>
									<option value="{{url('review?sort=lama')}}">Waktu (Terlama)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="tab__container">
					<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
						<div class="row">
							@if ($review->count() > 0)
								
								<!-- Start Single Product -->
								@foreach ($review as $item)
								
								<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="product__thumb">
										<a class="first__img" href="{{ route('review_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->buku->cover)}}" alt="product image"></a>
										<div class="hot__box">
											<span class="hot-label">{{ $item->buku->judul }}</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{ route('review_single', $item->slug) }}">{{ $item->judul }}</a></h4>
									
								</div>
							</div>
							@endforeach
							<!-- End Single Product -->

							@else
							<p>Tidak ada ulasan buku</p>
							@endif
							
						</div>
						<ul>
							<li>
								{{ $review->links() }}
							</li>
						</ul>
					</div>
					<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
						<div class="list__view__wrapper">
							<!-- Start Single Product -->
							@if ($review->count() > 0)

							@foreach ($review as $item)
								
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="{{ route('review_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->buku->cover)}}" alt="product images"></a>
								</div>
								<div class="content">
								<h3><a href="{{ route('review_single', $item->slug) }}">{{ $item->judul }}</a></h3>
								<h6>{{ $item->buku->judul }}</h6>
									{{-- <ul class="prize__box">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</ul> --}}
									<p>{!! str_limit( $item->isi, $limit = 300, $end = '...') !!}</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="{{ route('buku_single', $item->slug) }}">Lihat Selengkapnya</a></li>
									</ul>
								</div>
							</div>
							@endforeach

							@else
							<p>Tidak ada buku</p>
							@endif
							<!-- End Single Product -->
							
						</div><br>
						<ul>
							<li>
								{{ $review->links() }}
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Shop Page -->
@endsection
@push('script')
<script>
	function pindah(pindah) {
		var value = pindah.options[pindah.selectedIndex].value;
		window.location.href=value
	}
</script>
@endpush