@extends('frontend.site.app')

@section('content')
   	
	<!--Page Title-->
  <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>Our Gallery</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Gallery</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Gallery Section -->
    <section class="gallery-section gallery-page-section">
    	<div class="outer-section">
			<!-- MixitUp Galery -->
			<div class="mixitup-gallery">
				<div class="auto-container">
					<div class="sec-title centered">
						<div class="title">RECENT PROJECTS</div>
						<h2>Our Latest Case Studies</h2>
						<div class="text">If we had a ‘secret sauce’ it would be our awesome people. <br> We have only professional team!</div>
					</div>
					<!--Filter-->
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns clearfix">
							<li class="active filter" data-role="button" data-filter="all">All</li>
							<li class="filter" data-role="button" data-filter=".development">Development</li>
							<li class="filter" data-role="button" data-filter=".marketing">Markeging</li>
							<li class="filter" data-role="button" data-filter=".media">Media</li>
							<li class="filter" data-role="button" data-filter=".optimization">Optimization</li>
						</ul>
								
					</div>
				</div>
				
				<div class="filter-list row clearfix">
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix development media col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/2.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix media marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/3.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization development marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/4.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/4.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization media col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/5.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix development marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/6.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix media marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/7.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/7.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/8.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/8.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization media col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/9.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/9.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix development marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/10.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/10.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix media marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/11.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="{{asset('assets/projects-detail.html')}}">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/11.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Block -->
					<div class="gallery-block all mix optimization marketing col-lg-3 col-md-4 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{asset('assets/images/gallery/12.jpg')}}" alt="">
								<!-- Overlay Box -->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h4><a href="projects-detail.html">Analysis of <br> Security</a></h4>
											<div class="category">Marketing / Optmization</div>
											<a href="projects-detail.html" class="link"><span class="icon fa fa-link"></span></a>
											<a href="{{asset('assets/images/gallery/12.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-full-screen"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
			</div>
			
			<div class="btn-box text-center">
				<a href="projects.html" class="theme-btn btn-style-five"><span class="txt">View All Work</span></a>
			</div>
			
		</div>
	</section>
	<!-- End Gallery Section -->
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url(images/background/map-pattern.png)">
		<div class="dotted-layer" style="background-image: url(images/background/pattern-11.png)"></div>
		
		<div class="icon-layer" style="background-image: url(images/icons/cross-icon.png)"></div>
		<div class="icon-layer-two" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="icon-layer-three" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="icon-layer-four" style="background-image: url(images/icons/icon-1.png)"></div>
		
		<div class="auto-container">
			<div class="title">MORE WITH US</div>
			<h2>You Want to Showcase Your Busniess <br> in Top Join With Us</h2>
			<a href="about.html" class="theme-btn btn-style-three"><span class="txt">Join Us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section margin-bottom">
		<div class="auto-container">
			<div class="inner-container">
				<ul class="list">
					<li>
						<span class="icon flaticon-placeholder-4"></span>
						<strong>FL 33401, USA</strong>
						576d University St, Seattle, UK
					</li>
					<li>
						<span class="icon flaticon-phone-call"></span>
						<strong>009-215-5596</strong>
						Give us a call
					</li>
					<li>
						<span class="icon flaticon-message-1"></span>
						<strong>meto@mail.com</strong>
						Get in Touch
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->
    @endsection