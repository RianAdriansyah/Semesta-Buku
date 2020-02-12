@extends('layouts.front')
@section('web-title', 'Tentang')

@section('isi')
	
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title" style="color:black;">Tentang</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}" style="color:black;">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active" style="color:black;">Tentang</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start About Area -->
        <div class="page-about about_area bg--white section-padding--lg">
        	<div class="container">
				<div class="row">
        			<div class="col-lg-12">
        				<div class="section__title--3 text-center pb--30">
        					<h2>Semesta Buku</h2>
        					<p>Semesta Buku menyediakan beberapa artikel tentang literasi buku, 
								<br>informasi buku beserta review buku yang bisa menambah referensi literatur Anda</p>
        				</div>
        			</div>
        		</div>
        		<div class="row align-items-center">
					<div class="col-lg-4 col-sm-12 col-12">
        				<div class="content text-center text_style--2">
    					    <h2>Knowledge Is Power</h2>
    					    <div class="skill-container">
    					        <div class="thumb">
									<img src="{{ asset('assets/frontend/images/about/team/7.jpg') }}" alt="Team images">
								</div>
    					    </div>
        				</div>
        			</div>
        			<div class="col-lg-8 col-sm-12 col-12">
        				<div class="content">
        					<h3>Membaca Buku</h3>
        					<h2>Menambah Ilmu</h2>
        					<p class="mt--20 mb--20"> &nbsp; Semesta Buku bertujuan untuk menarik minat para pembaca dan menyediakan referensi referensi literatur pengguna untuk menemukan buku buku yang menarik dan terbaik.</p>
							<p>Semesta buku didirikan pada tahun 2020.</p>
        					<p class="mt--20 mb--20">&nbsp; Dengan website Semesta Buku ini, pengguna dapat mencari dan menemukan review, identitas buku, artikel dari buku buku yang menarik, terpopuler, terbaik, dll di dunia maupun di Indonesia dengan dikemas secara lengkap.</strong>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End About Area -->
        <!-- Start Team Area -->
        <section class="wn__team__area pb--75 bg--white">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<div class="section__title--3 text-center">
        					<h2>Profil</h2>
        					<p>Beberapa elemen yang penting bagi blog ini</p>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/me.png') }}" alt="Team images">
        					</div>
        					<div class="content text-center text_style--2">
        						
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/me2.jpg') }}" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h3>RIAN ADRIANSYAH</h3>
        						<p>Founder</p>
        						<ul class="team__social__net">
        							<li><a href="https://twitter.com/RianAd01"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="https://www.youtube.com/channel/UCo9Uy0N2dhhXHTeI8y7ywzw?view_as=subscriber"><i class="icon-social-youtube icons"></i></a></li>
        							<li><a href="https://www.facebook.com/rian.adriansyah.98434"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="https://www.linkedin.com/in/rian-adriansyah-5b07371a0/"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="https://id.pinterest.com/rianjh2/"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/me3.png') }}" alt="Team images">
        					</div>
        					<div class="content text-center">
        						
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        		</div>
        	</div>
        </section>
		<!-- End Team Area -->
		@endsection
