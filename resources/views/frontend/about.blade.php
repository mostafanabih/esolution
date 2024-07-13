@extends('frontend.site.app')

@section('content')
  <!-- Start inner Page hero-->
  <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">من نحن</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">من نحن</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start  about Section-->
    <section class="about mega-section" id="about">
      <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end  wow fadeInUp " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                  <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">نبذه عنا</span>
                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">متفردون دائما بخدمات رقميه <span class='featured-text'>  استثنائيه. <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 500 150" preserveaspectratio="none"><path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7"></path></svg></span></h2>
                  </div>
                </div>
                <p class=" about-text">النافذه دائما هي اختيارك الأول فنحن نتميز ب

</p>
                <div class="info-items-list ">
                  <div class="row ">
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-medal  info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">الاول فى المجال </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-game-console info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">سهولة الوصول </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-map info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">خدمات عالمية </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-9 col-xl-6">
                      <div class="info-item"><i class="flaticon-technical-support-1  info-icon"></i>
                        <div class="info-content">
                          <h5 class="info-title">دعم متواصل </h5>
                          <p class="info-text">من هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر الشكل كاملاً</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col  wow fadeInUp" data-wow-delay="0.2s">
              <div class="img-area  " data-tilt="">
                <div class="image   "><img class="about-img img-fluid " loading="lazy" src="assets/images/about/3.png" alt="Our vision"></div>
              </div>
            </div>
          </div>
        </div>
        <!--End first about div-->
      </div>
    </section>
    <!-- End  about Section-->
    <!-- Start  our-team Section-->
    <section class="our-team mega-section " id="our-team">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">فريق العمل</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"> أعضاء <span class='hollow-text'>فريق</span> الخبراء لدينا </h2>
          </div>
          <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="our-team.html">عرض المزيد<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="container">
          <div class="row">
            @foreach($teams as $info)
            <!--first Team Member-->
            <div class="col-12 col-md-8  col-lg-4 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="team-member.html"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset("storage/$info->image")}}" alt="Team Member"></a>
                  <div class="tm-social">
                    <div class="sc-wrapper dir-row sc-size-40">
                      <ul class="sc-list">
                        <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                        <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                        <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                        <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tm-details"><a class="tm-link" href="team-member.html"> 
                    <h6 class="tm-name">{{$info->name}}</h6></a><span class="tm-role">{{$info->title}}</span></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End  our-team Section-->
    <!-- Start  testimonials-->
    
    <!-- End  testimonials-->
    <!-- Start  our-clients Section-->
    <section class="our-clients  bg-main elf-section" id="our-clients">
      <div class="container-fluid">
        <div class="sec-heading d-none ">
          <h4 class="title ">شركاء النجاح</h4>
        </div>
        <div class=" clients-logos ">
          <!--Swiper-->
          <div class="swiper-container">
            <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">
              <!-- every client logo is located inside div  with clss name "swiper-slide ".
              if you want to add more logos please keep the strcture of the swiper-slide as showen below
              
              
              -->
              @foreach($clients as $client)
              <div class="swiper-slide">
                <div class="client-logo  "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{$client->logo}}" alt=" "></a></div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  our-clients Section-->
    <!-- Start  blog Section-->
    <section class="blog blog-home mega-section  " id="blog">
      <div class="container ">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">المدونات</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">احدث <span class='hollow-text'>الاخبار</span></h2>
          </div>
          <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="{{route('posts')}}">عرض المزيد<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="row ">
          <div class="col-12 "> 
            <div class="posts-grid ">
              <div class="row">
              @foreach($posts as $post)
                <div class="col-12 col-lg-4 ">
                  <div class="post-box">     <a class="post-link" href="post-single.html" title="هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة"> 
                      <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="{{asset("storage/$post->image")}}" alt=""><span class="post-date"><span class="day">{{ $post->created_at->format('d M Y') }}</span></div></a>
                    <div class="post-summary">
                      <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>{{$post->type}}</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>{{$post->user}}</a></div>
                      <div class="post-text"><a class="post-link" href="post-single.html"> 
                          <h2 class="post-title"> {{$post->name}}</h2></a>
                        <p class="post-excerpt">{{$post->description}}</p><a class="read-more" href="post-single.html" title="هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة">المزيد<i class="bi bi-arrow-left icon "></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  blog Section-->
    <!-- Start  take-action Section-->
    <section class="take-action elf-section has-dark-bg" id="take-action">
      <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25"> </div>
      <div class="cta-wrapper">
        <div class="container">
          <div class="sec-heading  centered mb-0 ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">تواصل معنا</span>
              <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">تواصل معنا</h2>
              <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">أرسل إلينا رسالتك وسنعاود الإتصال بك لتقديم الخدمة المناسبة

               </p>
            </div>
          </div>
          <!--Start .see-more-area-->
          <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="contact-us.html">تواصل معنا</a></div>
          <!--End Of .see-more-area        -->
        </div>
      </div>
    </section>
    <!-- End  take-action Section-->   
    
@endsection





   