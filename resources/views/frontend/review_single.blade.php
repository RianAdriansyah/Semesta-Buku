@extends('layouts.front')

@section('web-title')
	{{ $review->judul }}
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title" style="color:black;">{{ $review->judul }}</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
							<span class="breadcrumb_item active" style="color:black;">{{ $review->judul }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="{{ asset('assets/img/review/cover/'.$review->cover)}}" alt="blog images">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
									<h2>{{ $review->judul }}</h2>
										<div class="blog-date-categori">
											<ul>
											<li>{{ $review->created_at->diffForHumans() }}</li>
											<li><p title="Posts by boighor">oleh : {{ $review->user->name }}</p></li><br>
											</ul>
										</div>
									</div>
									<div class="post_content">
										<div class="row">
											<div class="col-lg-3">
												<img src="{{ asset('assets/img/buku/cover/'.$review->buku->cover)}}" alt="blog images" width="100%">
											</div>
											<div class="col-lg-9">
												<table style="table">
													<tr>
														<td style="width: 20%;">Judul Buku</td>
														<td style="width: 5%;">: </td>
													<td>{{ $review->buku->judul }}</td>
													</tr>
													<tr>
													<tr>
														<td style="width: 20%;">Nama Penulis</td>
														<td style="width: 5%;">: </td>
													<td>{{ $review->buku->penulis }}</td>
													</tr>
													<tr>
														<td style="width: 20%;">Nama Penerbit</td>
														<td style="width: 5%;">: </td>
														<td>{{ $review->buku->penerbit }}</td>
													</tr>
													<tr>
														<td style="width: 20%;">Kategori</td>
														<td style="width: 5%;">: </td>
														<td>{{ $review->buku->kategori->nama_kategori }}</td>
													</tr>
													<tr>
														<td style="width: 20%;">Tanggal Terbit</td>
														<td style="width: 5%;">: </td>
														<td>{{ $review->buku->tgl_terbit }}</td>
													</tr>
												</table>
											</div>
										</div>
										<p>{!! $review->isi !!}</p>
										@if ($review->quotes)
										<blockquote>{{ $review->quotes }}</blockquote>
										@endif

									</div>
									<ul class="blog_meta">
										<li>Tag : 
											<span>
											@foreach ($tag as $list)
											{{ $list->nama_tag }}, 
											@endforeach
											</span>
										</li>
									</ul>
								</div>
							</article>
							@include('layouts.disqus')
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Cari Ulasan</h3>
							<form action="{{ route('review') }}">
									<div class="form-input">
										<input type="text" placeholder="Cari..." name="carireview">
										<button type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<!-- End Single Widget -->
							
							<!-- Start Single Widget -->
							<aside class="widget category_widget">
								<h3 class="widget-title">Buku Terbaru</h3>
								<ul>
									@php
										$buku = \App\Buku::orderBy('created_at', 'desc')->take(5)->get();
									@endphp
									@if ($buku->count() > 0)
										
									@foreach ($buku as $item)
									<li><a href="{{ route('buku_single', $item->slug) }}">{{ $item->judul }}</a></li>
									@endforeach
									@else
									<li><p>Tidak ada buku</p></li>
									@endif
        						</ul>
        					</aside>
        					<!-- End Single Widget -->
        					<!-- Start Single Widget -->
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tag Buku</h3>
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
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>

		@endsection