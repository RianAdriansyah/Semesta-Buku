@extends('layouts.front')

@section('web-title')
Koleksi Buku
@endsection

@section('isi')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title" style="color:black;">Koleksi Buku</h2>
					<nav class="bradcaump-content">
					<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active" style="color:black;">Koleksi Buku</span>
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
					<aside class="wedget__categories poroduct--cat">
						<h3 class="wedget__title">Kategori Buku</h3>
						<ul>
							@if ($kategori->count() > 0)
								
							@foreach ($kategori as $item)
							<li><a href="#">{{ $item->nama_kategori }} <span>({{ $item->Buku->count() }})</span></a></li>
							@endforeach
							@else
							<li><p>Tidak ada kategori</p></li>
							@endif
						</ul>
					</aside>
				
					<aside class="wedget__categories poroduct--tag">
						<h3 class="wedget__title">Tag Buku</h3>
						<ul>
							@if ($tag->count() > 0)
								
							@foreach ($tag as $item)
							<li><a href="#">{{ $item->nama_tag }}</a></li>
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
							<p>Menampilkan {{ $buku->count() }} dari {{ \App\Buku::all()->count() }} hasil</p>
							<div class="orderby__wrapper">
								<span>Urutkan</span>
								<select class="shot__byselect" name="sort" onchange="pindah(this)">
									<option disabled selected>Pilih Urutan</option>
									<option value=" {{ url('buku') }}">Urutan awal</option>
									<option value=" {{url('buku?sort=baru')}}">Waktu (Terbaru)</option>
									<option value="{{url('buku?sort=lama')}}">Waktu (Terlama)</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="tab__container">
					<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
						<div class="row">
							@if ($buku->count() > 0)
								
								<!-- Start Single Product -->
								@foreach ($buku as $item)
								
								<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
									<div class="product__thumb">
										<a class="first__img" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product image"></a>
										<div class="hot__box">
											<span class="hot-label">{{ $item->kategori->nama_kategori }}</span>
									</div>
								</div>
								<div class="product__content content--center">
									<h4><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></h4>
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
							@endforeach
							<!-- End Single Product -->

							@else
							<p>Tidak ada buku</p>
							@endif
							
						</div>
						<ul>
							<li>
								{{ $buku->links() }}
							</li>
						</ul>
					</div>
					<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
						<div class="list__view__wrapper">
							<!-- Start Single Product -->
							@foreach ($buku as $item)
								
							<div class="list__view mt--40">
								<div class="thumb">
									<a class="first__img" href="{{ route('buku_single', $item->slug) }}"><img src="{{ asset('assets/img/buku/cover/'.$item->cover)}}" alt="product images"></a>
								</div>
								<div class="content">
								<h2><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></h2>
									<ul class="prize__box">
										<ul class="rating d-flex">
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li class="on"><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</ul>
									<p>{!! str_limit( $item->sinopsis, $limit = 300, $end = '...') !!}</p>
									<ul class="cart__action d-flex">
										<li class="cart"><a href="{{ route('buku_single', $item->slug) }}">Lihat Selengkapnya</a></li>
									</ul>
								</div>
							</div>
							@endforeach
							<!-- End Single Product -->
							
						</div><br>
						<ul>
							<li>
								{{ $buku->links() }}
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