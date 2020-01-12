@include('layouts.fronthead')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Tentang Kami</h2>
                            <nav class="bradcaump-content">
							<a class="breadcrumb_item" href="{{ route('index') }}">Beranda</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Tentang Kami</span>
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
									<img src="{{ asset('assets/frontend/images/about/team/1.jpg') }}" alt="Team images">
								</div>
    					    </div>
        				</div>
        			</div>
        			<div class="col-lg-8 col-sm-12 col-12">
        				<div class="content">
        					<h3>Membaca Buku</h3>
        					<h2>Menambah Ilmu</h2>
        					<p class="mt--20 mb--20">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
        					<strong>London Address</strong>
        					<p>34 Parer Place via Musk Avenue Kelvin Grove, QLD, 4059</p>
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
        					<h2>Profil Kami</h2>
        					<p>Beberapa elemen yang penting bagi blog kami</p>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/1.jpg') }}" alt="Team images">
        					</div>
        					<div class="content text-center text_style--2">
        						<h3>RIAN ADRIANSYAH</h3>
        						<p>Marketer</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/2.jpg') }}" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h3>RIAN ADRIANSYAH</h3>
        						<p>Founder</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        			<!-- Start Single Team -->
        			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
        				<div class="wn__team">
        					<div class="thumb">
        						<img src="{{ asset('assets/frontend/images/about/team/3.jpg') }}" alt="Team images">
        					</div>
        					<div class="content text-center">
        						<h3>RIAN ADRIANSYAH</h3>
        						<p>Co-Founder</p>
        						<ul class="team__social__net">
        							<li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-tumblr icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
        							<li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<!-- End Single Team -->
        		</div>
        	</div>
        </section>
        <!-- End Team Area -->
		@include('layouts.frontfoot')