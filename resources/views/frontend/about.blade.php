@extends('frontend.site.app')

@section('content')
 	
	<!--Page Title-->
  <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>About us</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>About us</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- About Section -->
    <section class="about-section style-two">
		<div class="bg-pattern-layer" style="background-image: url(images/background/pattern-16.png)"></div>
		<!-- Pattern One -->
		<div class="left-patterm paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image:url(images/icons/about.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">ABOUT US</div>
							<h2>Grow Business with SEO</h2>
						</div>
						<div class="bold-text">Over 12 years Meto helping companies reach <br> their financial and branding goals.</div>
						<div class="text">Over the years, we have worked with Fortune 500s and brand-new startups. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales. Give us a call.</div>
						<a href="about.html" class="theme-btn btn-style-three"><span class="txt">Learn More</span></a>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">
						<div data-depth="0.30" class="image">
							<img src="{{asset('assets/images/resource/about.png')}}" alt ="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Services Section -->
    <section class="services-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="inner-content">
							<div class="icon-box">
								<span class="icon flaticon-rocket"></span>
							</div>
							<h5>Greate Results</h5>
							<div class="text">We have seen great successes <br> with everyone companies.</div>
							<span class="side-icon flaticon-rocket"></span>
						</div>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="left-top-icon flaticon-rocket"></div>
									<div class="overlay-icon flaticon-rocket"></div>
									<h5><a href="service-detail.html">Greate Results</a></h5>
									<div class="text">We have seen great successes <br> with everyone companies.</div>
									<a href="service-detail.html" class="arrow"><span class="icon flaticon-right-arrow-2"></span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
						<div class="inner-content">
							<div class="icon-box">
								<span class="icon flaticon-world"></span>
							</div>
							<h5>Business Worth</h5>
							<div class="text">Every business and industry requires an approach.</div>
							<span class="side-icon flaticon-world"></span>
						</div>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="left-top-icon flaticon-world"></div>
									<div class="overlay-icon flaticon-world"></div>
									<h5><a href="service-detail.html">Business Worth</a></h5>
									<div class="text">Every business and industry <br> requires an approach.</div>
									<a href="service-detail.html" class="arrow"><span class="icon flaticon-right-arrow-2"></span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="inner-content">
							<div class="icon-box">
								<span class="icon flaticon-connect"></span>
							</div>
							<h5>Keep Your Groth</h5>
							<div class="text">You make sure you know how <br> campaign is performing.</div>
							<span class="side-icon flaticon-connect"></span>
						</div>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="left-top-icon flaticon-connect"></div>
									<div class="overlay-icon flaticon-connect"></div>
									<h5><a href="service-detail.html">Keep Your Groth</a></h5>
									<div class="text">You make sure you know how <br> campaign is performing.</div>
									<a href="service-detail.html" class="arrow"><span class="icon flaticon-right-arrow-2"></span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Service Block -->
				<div class="service-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
						<div class="inner-content">
							<div class="icon-box">
								<span class="icon flaticon-report"></span>
							</div>
							<h5>Important ROI</h5>
							<div class="text">To generate highly focused leads <br> ready to purchases.</div>
							<span class="side-icon flaticon-report"></span>
						</div>
						
						<!-- Overlay Box -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<div class="left-top-icon flaticon-report"></div>
									<div class="overlay-icon flaticon-report"></div>
									<h5><a href="service-detail.html">Important ROI</a></h5>
									<div class="text">To generate highly focused leads <br> ready to purchases.</div>
									<a href="service-detail.html" class="arrow"><span class="icon flaticon-right-arrow-2"></span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- SEO Section Three -->
    <section class="seo-section-three">
        <div class="auto-container">
            <div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-2">
						<div class="image" data-depth="0.30">
							<img src="{{asset('assets/images/resource/seo-1.png')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">WHO WE ARE</div>
							<h2>Our Mission is to change <br> Your View for SEO</h2>
							<div class="text">Smratseo is a brand of digital agency. Competen novate synergstic vortas through forward strategic theme areas Compelling extend super was that Proactive myocardinate vertical strategic</div>
						</div>
						<ul class="seo-list">
							<li><span class="icon flaticon-check-symbol"></span>If Google can’t crawl your site, it’s not going to rank – but that <br> doesn’t mean avoiding Javascript.</li>
							<li><span class="icon flaticon-check-symbol"></span>For businesses which sell products online & and improve their <br> product listings in the search results..</li>
							<li><span class="icon flaticon-check-symbol"></span>If you’re investing in a new website it’s important to ensure it’s <br> built to succeed in the search results too.</li>
						</ul>
					</div>
				</div>
				
			</div>
        </div>
    </section>
    <!-- End SEO Section Three -->
	
	<!-- Website Section -->
	<section class="website-section">
		<div class="map-pattern" style="background-image: url(images/background/map-pattern.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">
						<div data-depth="0.30" class="image">
							<img src="{{asset('assets/images/resource/website.png')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Take Your Website to Next <br> Level Right Now!</h2>
						<div class="text">Make the Right Choice for Your Future. Choose Moto!</div>
						<a href="about.html" class="theme-btn btn-style-one"><span class="txt">Start Now</span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Website Section -->
	
	<!-- Counter Section Two -->
	<section class="counter-section-two margin-top">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Fact Counter -->
				<div class="fact-counter-two">
					<div class="row clearfix">

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="{{asset('assets/images/icons/counter-1.png')}}" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<h4 class="counter-title">Active Clients</h4>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="330">0</span>+
									</div>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="{{asset('assets/images/icons/counter-2.png')}}" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<h4 class="counter-title">Team Advisors</h4>
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="5000" data-stop="85">0</span>+
									</div>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="{{asset('assets/images/icons/counter-3.png')}}" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<h4 class="counter-title">Projects Done</h4>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="850">0</span>+
									</div>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon-box">
										<span class="icon"><img src="{{asset('assets/images/icons/counter-4.png')}}" alt="" /></span>
										<div class="circles-box">
											<span class="circle-one"></span>
											<span class="circle-two"></span>
										</div>
									</div>
									<h4 class="counter-title">Glorious Years</h4>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3500" data-stop="15">0</span>+
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section Two -->
	
	<!-- Steps Section -->
	<section class="steps-section">
		<div class="left-pattern" style="background-image: url(images/background/pattern-7.png)"></div>
		<div class="right-pattern" style="background-image: url(images/background/pattern-8.png)"></div>
		<div class="dotted-pattern" style="background-image: url(images/background/pattern-1.png)"></div>
		<div class="dotted-pattern-2" style="background-image: url(images/background/pattern-5.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">HOW WE DO IT</div>
				<h2>Steps to Build a Successful <br> Digital Product</h2>
			</div>
			<div class="clearfix">
				
				<!-- Step Block -->
				<div class="step-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">
							<div class="number">01</div>
						</div>
						<h5>Advertising and <br> Marketing</h5>
					</div>
				</div>
				
				<!-- Step Block -->
				<div class="step-block style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h5>Web <br> Development</h5>
						<div class="number-box">
							<div class="number">02</div>
						</div>
					</div>
				</div>
				
				<!-- Step Block -->
				<div class="step-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="number-box">
							<div class="number">03</div>
						</div>
						<h5>Mobile App <br> Development</h5>
					</div>
				</div>
				
				<!-- Step Block -->
				<div class="step-block style-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h5>Search Engine <br> Optimization</h5>
						<div class="number-box">
							<div class="number">04</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Steps Section -->
	
	<!-- Seo Section Two -->
	<section class="seo-section-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="pattern-one" style="background-image: url(images/background/pattern-9.png)"></div>
				<div class="pattern-two" style="background-image: url(images/icons/cloud-1.png)"></div>
				<div class="pattern-three" style="background-image: url(images/icons/cloud-2.png)"></div>
				<div class="pattern-four" style="background-image: url(images/icons/cloud-3.png)"></div>
				<div class="rocket-icon" style="background-image: url(images/icons/rocket.png)"></div>
				
				<!-- Sec Title -->
				<div class="sec-title light">
					<div class="title">Web SEO</div>
					<h2>Check Your Website For SEO</h2>
				</div>
				
				<!-- Seo Form-->
				<div class="seo-form">
					<form method="post" action="contact.html">
						<div class="form-group clearfix">
							<input type="text" name="website" value="" placeholder="Your Website URL" required>
							<input type="email" name="email" value="" placeholder="Email" required>
						</div>
						<button type="submit" class="theme-btn btn-style-four"><span class="txt">Send Now</span></button>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Seo Section Two -->
	
	<!-- Faq's Section -->
    <section class="faq-section style-two">
        <div class="auto-container">
            <div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-3">
						<div class="image" data-depth="0.30">
							<img src="{{asset('assets/images/resource/faq.png')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Accordian Column -->
				<div class="accordian-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Some Faq’s</div>
							<h2>Work with a Dedicated <br> SEO Company</h2>
							<div class="text">Our approach to SEO is uniquely built around what we know works…and what we know doesn’t work. With over 200 verified factors in play.</div>
						</div>
						
						<!-- Accordian Box -->
						<ul class="accordion-box">

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Best Practices for Keyword Density?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Google has said for years that the most important single factor to them is high quality content. Now more than ever, they have the ability. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers.</div>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block active-block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Best SEO Practices for Page Layouts?</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">Google has said for years that the most important single factor to them is high quality content. Now more than ever, they have the ability. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers.</div>
									</div>
								</div>
							</li>
							
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is off page SEO link building?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Google has said for years that the most important single factor to them is high quality content. Now more than ever, they have the ability. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers.</div>
									</div>
								</div>
							</li>
							
							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Best SEO Practices for High Quality Content?</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">Google has said for years that the most important single factor to them is high quality content. Now more than ever, they have the ability. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers.</div>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Faq's Section -->
	
	<!-- Newsletter Section -->
	<section class="newsletter-section margin-bottom">
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<span class="icon flaticon-rocket-ship"></span>
							<h4>Subscribe for Newsletter</h4>
							<div class="text">Grow Your Business with Our SEO Agency</div>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!--Emailed Form-->
							<div class="emailed-form">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Email Address" required>
										<button type="submit" class="theme-btn">Lets Start</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Newsletter Section -->
    
@endsection





   