@extends('frontend.site.app')
@section('content')
 	<!--Page Title-->
   <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>توصل معنا</h2>
			<ul class="page-breadcrumb">
				<li><a href="/">الصفحة الرئيسية</a></li>
				<li>توصل معنا</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
    <section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Form Form -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">ارسل لنا رساله</div>
						</div>

						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" value="" placeholder="الاسم" required>
                                </div>

								<div class="form-group">
									<input type="email" name="email" value="" placeholder="البريد الاكتروني" required>
								</div>

								<div class="form-group">
									<input type="text" name="subject" value="" placeholder="الموضوع" required>
								</div>

								<div class="form-group">
									<textarea name="message" placeholder="الرساله"></textarea>
								</div>

								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-four"><span class="txt">ارسال</span></button>
								</div>

                            </form>
                        </div>

					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">ESolutions</div>
							<div class="text">هي شركة رائدة في مجال التحول الرقمي والتسويق الإلكتروني. نحن نساعد الشركات على تعزيز حضورها الرقمي وزيادة كفاءتها من خلال حلول مبتكرة وتقنيات متقدمة. خدماتنا تشمل تطوير المواقع والتطبيقات، تحسين محركات البحث، وإدارة حملات التسويق الرقمي. بفضل فريقنا المتخصص وخبرتنا الواسعة، نضمن لك تحقيق نتائج مميزة ونمو مستدام في السوق الرقمي
                            </div>
						</div>

						<!-- Info List -->
						<ul class="info-list">
							<li>
								<span class="icon flaticon-placeholder-4"></span>
								<strong>المملكة العربيه السعوديه</strong>
الرياض							</li>
							<li>
								<span class="icon flaticon-phone-call"></span>
								<strong>0561501409</strong>
اتصل بنا							</li>
							<li>
								<span class="icon flaticon-stopwatch"></span>
								<strong> info@esolutions-tech.com</strong>
								صندوق البريد
							</li>
						</ul>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->

	<!-- Map Section -->
	<section class="map-section">
		<!-- Map Boxed -->
		<div class="map-boxed">
			<!--Map Outer-->
			<div class="map-outer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
			</div>
		</div>
	</section>
	<!-- End Map Section -->

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
