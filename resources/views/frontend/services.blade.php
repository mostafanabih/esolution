@extends('frontend.site.app')

@section('content')

	<!--Page Title-->
  <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-15.png)"></div>
    	<div class="auto-container">
			<h2>الخدمات</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">الصفحة الرئيسية</a></li>
				<li>الخدمات</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->


	<!-- Services Section Five -->
    <section class="services-section-five">
		<div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/background/service-pattern-3.png')}})"></div>
		<div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/background/service-pattern-4.png')}})"></div>
		<div class="gradient-layer"></div>
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">خدماتنا</div>
				{{-- <div class="text">Our strategy includes consistently evolving, to ensure we’re <br> producing exceptional SEO for business.</div> --}}
			</div>

			<div class="row clearfix">

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-statistics"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">صناعة المحتوى الإبداعي
                            </a></h4>
							<div class="text">نصنع أفكار استثنائية لعرض نشاطات شركائنا ونجسدها في محتوى متجدد يناسب طبيعة كل نشاط تجاري بداية من الملفات التعريفية إلى محتوى المواقع الإلكترونية ومحتوى منصات التواصل الاجتماعي.
                            </div>
						</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-presentation"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">التسويق الرقمي
                            </a></h4>
							<div class="text">نحن شركة تسويق رقمي نقدم خدمات التسويق عبر منصات التواصل الاجتماعي المختلفة من خلال تخطيط مدروس وتحليل منهجي وتقييم مستمر لأداء الحملات، هذا بالإضافة إلى خدمة SEO التي تجعلك تتصدر محركات البحث مقابل منافسينك</div>
						</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-chart"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">تصميم المواقع والتطبيقات
                            </a></h4>
							<div class="text">شركة تسويق رقمي بفريق متخصص في تصميم واجهات المستخدم وتطوير المواقع والتطبيقات الإلكترونية والمتاجر يساعدك في بناء منظومة الكترونية شاملة و متكاملة وإخراجها بأفضل صورة ممكنة.

                            </div>
						</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-statistics"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">إدارة حسابات التواصل الاجتماعي
                            </a></h4>
							<div class="text">نؤسس تواجد متكامل في منصات التواصل المختلفة لشركائنا، عبر الاستخدام الأمثل لكافة الأدوات الإبداعية بداية من الخطة وكتابة المحتوى والتصميم الإبداعي والردود على المتابعين.
                            </div>
						</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-presentation"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">إدارة العلامة التجارية
                            </a></h4>
							<div class="text">نبتكر قصة العلامة التجارية من البداية، ونحدد استراتيجيتها، وشخصيتها، و نبرة صوتها وطرق ظهورها ومن ثم نقوم بتصميم الهوية البصرية بصورة متكاملة تعكس الظهور الفريد لشركائنا.
                            </div>
						</div>
					</div>
				</div>

				<!-- Service Block Five -->
				<div class="service-block-five col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-chart"></span>
							<div class="circles-box">
								<span class="circle-one"></span>
								<span class="circle-two"></span>
							</div>
						</div>
						<div class="lower-content">
							<div class="left-pattern"></div>
							<div class="right-pattern"></div>
							<h4><a href="#">التسويق عبر المؤثرين
                            </a></h4>
							<div class="text">نساعدك في اختيار المؤثر الأنسب للحملات التسويقية من خلال قاعدة شاملة تحتوي على الفئات المختلفة لمؤثرين منصات التواصل الاجتماعي (ميقا، ميكرو، نانو)، نبني الفكرة والسيناريو المناسب.
                            </div>
						</div>
					</div>
				</div>

			</div>

			{{-- <div class="btn-box centered">
				<a href="services.html" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
			</div> --}}

		</div>
	</section>
	<!-- End Services Section Five -->
	<!-- End Newsletter Section -->
    @endsection
