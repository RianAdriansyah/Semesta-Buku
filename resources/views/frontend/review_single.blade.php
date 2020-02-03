@extends('layouts.front')

@section('web-title')
	{{ $review->judul }}
@endsection

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
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
											<li><a href="#" title="Posts by boighor" rel="author">by : {{ $review->user->name }}</a></li><br>
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

							<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://semesta-buku.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
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
								<h3 class="wedget__title">Tag Buku</h3>
        						<ul>
        							@foreach ($tag as $item)
										
								<li><a href="#">{{ $item->nama_tag }}</a></li>
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