@extends('layouts.front')

@section('web-title')
	{{ $artikel->judul }}
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title" style="color:black;">{{ $artikel->judul }}</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
							<span class="breadcrumb_item active" style="color:black;">{{ $artikel->judul }}</span>
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
									<img src="{{ asset('assets/img/artikel/cover/'.$artikel->cover)}}" alt="blog images">
								</div>
								<div class="post_wrapper">
									<div class="post_header">
									<h2>{{ $artikel->judul }}</h2>
										<div class="blog-date-categori">
											<ul>
											<li>{{ $artikel->created_at->diffForHumans() }}</li>
											<li>Judul Buku : <b>{{ $artikel->buku->judul }}</b></li>
											<li><a href="#" title="Posts by boighor" rel="author">by : {{ $artikel->user->name }}</a></li><br>
											</ul>
										</div>
									</div>
									<div class="post_content">
										<p>{!! $artikel->konten !!}</p>

									</div>
									<ul class="blog_meta">
											
										<li>Genre : 
											<span>
											@foreach ($genre as $list)
											{{ $list->nama_genre }}, 
											@endforeach
											</span>
										</li>
									</ul>
								</div>
							</article>
							{{-- <div class="comments_area">
								<h3 class="comment__title">1 comment</h3>
								<ul class="comment__list">
									<li>
										<div class="wn__comment">
											<div class="thumb">
												<img src="{{ asset('assets/frontend/images/blog/comment/1.jpeg') }}" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
									<li class="comment_reply">
										<div class="wn__comment">
											<div class="thumb">
												<img src="{{ asset('assets/frontend/images/blog/comment/1.jpeg') }}" alt="comment images">
											</div>
											<div class="content">
												<div class="comnt__author d-block d-sm-flex">
													<span><a href="#">admin</a> Post author</span>
													<span>October 6, 2014 at 9:26 am</span>
													<div class="reply__btn">
														<a href="#">Reply</a>
													</div>
												</div>
												<p>Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="comment_respond">
								<h3 class="reply_title">Leave a Reply <small><a href="#">Cancel reply</a></small></h3>
								<form class="comment__form" action="#">
									<p>Your email address will not be published.Required fields are marked </p>
									<div class="input__box">
										<textarea name="comment" placeholder="Your comment here"></textarea>
									</div>
									<div class="input__wrapper clearfix">
										<div class="input__box name one--third">
											<input type="text" placeholder="name">
										</div>
										<div class="input__box email one--third">
											<input type="email" placeholder="email">
										</div>
										<div class="input__box website one--third">
											<input type="text" placeholder="website">
										</div>
									</div>
									<div class="submite__btn">
										<a href="#">Post Comment</a>
									</div>
								</form>
							</div> --}}
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="wn__sidebar">
							<!-- Start Single Widget -->
							<aside class="widget search_widget">
								<h3 class="widget-title">Search</h3>
								<form action="#">
									<div class="form-input">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</div>
								</form>
							</aside>
							<!-- End Single Widget -->
							
							<!-- Start Single Widget -->
							<aside class="widget category_widget">
								<h3 class="widget-title">Kategori Buku</h3>
								<ul>
									@foreach ($kategori as $item)
										
        							<li><a href="#">{{ $item->nama_kategori }} <span>(3)</span></a></li>
									@endforeach
								</ul>
							</aside>
							<!-- End Single Widget -->
							
							<!-- Start Single Widget -->
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Genre Buku</h3>
        						<ul>
        							@foreach ($genre as $item)
										
								<li><a href="#">{{ $item->nama_genre }}</a></li>
									@endforeach
        						</ul>
        					</aside>
							<!-- End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</div>

		@endsection