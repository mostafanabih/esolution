<!-- Main Header-->
<header class="main-header header-style-three">

      <!-- Header Top -->
          <div class="header-top">
              <div class="auto-container">
                  <div class="inner-container clearfix">

            <!-- Top Left -->
            <div class="top-left pull-left">
              <!-- Page Nav -->
              <ul class="page-nav">
                {{-- <li><a href="#">About Us</a></li>
                <li><a href="#">FAQ</a></li> --}}
              </ul>
            </div>

            <!-- Top Right -->
                      <div class="top-right pull-right">

              <!-- Info List -->
                          <ul class="info-list">
                <li><span class="icon flaticon-maps-and-flags"></span> المملكة العربيه السعوديه الرياض</li>
                <li><span class="icon flaticon-email-4"></span><a href="mailto:info@esolutions-tech.com">info@esolutions-tech.com</a></li>
              </ul>

                      </div>

                  </div>
              </div>
          </div>

      <!--Header-Upper-->
          <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png')}}" style="
                            width: 150px;
                        " alt="" title=""></a></div>
                      </div>

            <div class="nav-outer clearfix">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
              <!-- Main Menu -->
              <nav class="main-menu navbar-expand-md">
                <div class="navbar-header">
                  <!-- Toggle Button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                  <ul class="navigation clearfix">
                    <li class="dropdown @if (Route::currentRouteName() == 'index') current @endif"><a href="{{route('index')}}">الصفحة الرئيسية</a>

                    </li>
                    <li class="dropdown @if (Route::currentRouteName() == 'about') current @endif"><a href="#">حول</a>

                    </li>
                    <li class="dropdown @if (Route::currentRouteName() == 'services') current @endif"><a href="{{route('services')}}">الخدمات</a>

                    </li>
                    <li class="dropdown @if (Route::currentRouteName() == 'projects') current @endif"><a href="#">المشاريع</a>

                    </li>

                    <li class="dropdown @if (Route::currentRouteName() == 'posts') current @endif"><a href="#">المدونه</a>

                    </li>
                    <li><a href="{{route('contacts')}}">اتصل بنا</a></li>
                  </ul>
                </div>
              </nav>

              <!-- Main Menu End-->
              <div class="outer-box clearfix">


                <!-- Search Btn -->

                <!-- Quote Btn -->
                <div class="btn-box">
                  <a href="{{route('contacts')}}" class="quote-btn btn-style-four"><span class="txt">اتصل بنا</span></a>
                </div>

              </div>
            </div>

                  </div>

              </div>
          </div>
          <!--End Header Upper-->

      <!-- Sticky Header  -->
          <div class="sticky-header">
              <div class="auto-container clearfix">
                  <!--Logo-->
                  <div class="logo pull-left">
                      <a href="index.html" title=""><img src="{{ asset('assets/images/logo-small.png') }} " style="
                        width: 150px;
                    " alt="" title=""></a>
                  </div>
                  <!--Right Col-->
                  <div class="pull-right">
                      <!-- Main Menu -->
                      <nav class="main-menu">
                          <!--Keep This Empty / Menu will come through Javascript-->
                      </nav><!-- Main Menu End-->

            <!-- Main Menu End-->
            <div class="outer-box clearfix">



              <!-- Search Btn -->

              <!-- Nav Btn -->
              <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

            </div>

                  </div>
              </div>
          </div><!-- End Sticky Menu -->

      <!-- Mobile Menu  -->
          <div class="mobile-menu">
              <div class="menu-backdrop"></div>
              <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

              <nav class="menu-box">
                  <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/logo-2.png')}}" alt="" title="" style="
                    width: 150px;
                "></a></div>
                  <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
              </nav>
          </div><!-- End Mobile Menu -->

      </header>
      <!-- End Main Header -->

    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
      <div class="xs-overlay xs-bg-black"></div>
      <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
          <div class="widget-heading">
            <a href="#" class="close-side-widget">
              X
            </a>
          </div>
          <div class="sidebar-textwidget">

            <!-- Sidebar Info Content -->
            {{-- <div class="sidebar-info-contents">
              <div class="content-inner">
                <div class="logo">
                  <a href="index.html"><img src="{{ asset('assets/images/logo.png')}}" alt="" /></a>
                </div>
                <div class="content-box">
                  <h2>About Us</h2>
                  <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                  <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                </div>
                <div class="contact-info">
                  <h2>Contact Info</h2>
                  <ul class="list-style-one">
                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                    <li><span class="icon fa fa-envelope"></span>meto@gmail.com</li>
                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                  </ul>
                </div>
                <!-- Social Box -->
                <ul class="social-box">
                  <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                  <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                  <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                  <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                  <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                </ul>
              </div>
            </div> --}}

          </div>
        </div>
      </div>
    </div>
    <!-- END sidebar widget item -->
