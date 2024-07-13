@extends('frontend.site.app')

@section('content')
   <!-- Start inner Page hero-->
   <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">تواصل معنا</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">تواصل معانا</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start contact-us -->
    <section class="contact-us  mega-section  pb-0" id="contact-us">
      <div class="container">
        <section class="locations-section  mega-section ">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">مكاتبنا علي مستوي المملكه</h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row">
                <div class="col-12 col-lg-4">     
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".4s ">
                    <h4 class="location-title">الخبر</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">شارع مكه</p>
                    <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+29876543210</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-4">           
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".6s">
                    <h4 class="location-title">الاحساء</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">شارع الظهران</p>
                    <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">email:</h6><a class="email link" href="mailto:yourname@example.com">info@example.com</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+969876543210</a>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <section class="map-section  elf-section">
          <div class="sec-heading  centered   ">
            <div class="content-area">
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">تجدنا على خرائط جوجل</h2>
            </div>
          </div>
          <div class="map-box  wow fadeInUp" data-wow-delay=".6s">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.645907837392!2d49.59360831451876!3d25.382144683780287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49d74b98d3c04b%3A0xdd2d0f832f362a90!2sAlehsaa%2C%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1624568400000!5m2!1sen!2seg"></iframe>
              </div>
            </div>
          </div>
        </section>
        <section class="contact-us-form-section  mega-section  ">
          <div class="row">
            <div class="col-12 ">
              <div class="contact-form-panel">
                <div class="sec-heading centered    ">
                  <div class="content-area">
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">لديك أي أسئلة؟ دعونا نجيب عليهم</h2>
                  </div>
                </div>
                <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                  <div class="custom-form-area input-boxed"> 
                    <!--Form To have user messages-->
                    <form class="main-form" id="contact-us-form" action="{{route('contact_us')}}" method="post"><span class="done-msg"></span>
                       @csrf
                      <div class="row ">
                        <div class="col-12 col-lg-6">
                          <div class="   input-wrapper">
                            <input class="text-input" id="user-name" name="name" type="text">
                            <label class="input-label" for="user-name"> الاسم <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="   input-wrapper">
                            <input class="text-input" id="user-email" name="email" type="email">
                            <label class="input-label" for="user-email"> البريد الالكتروني <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="   input-wrapper">
                            <input class="text-input" id="msg-subject" name="subject" type="text">
                            <label class="input-label" for="msg-subject"> الموضوع <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="   input-wrapper">
                            <textarea class=" text-input" id="msg-text" name="message"></textarea>
                            <label class="input-label" for="msg-text"> رسالتك <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 submit-wrapper">
                          <button class=" btn-solid" id="submit-btn" type="submit" name="UserSubmit">ارسل رسالتك</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- End contact-us -->





    
    @endsection