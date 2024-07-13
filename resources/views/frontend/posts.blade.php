@extends('frontend.site.app')
@section('content')
  <!-- Start inner Page hero-->
  <!-- Start inner Page hero-->
  <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">المدونات</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>الرئيسيه</a></li>
              <li class="breadcrumb-item active">الاخبار</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start _3-col-left-sidebar-->
    <section class="blog blog-home mega-section">
      <div class="container ">
        <div class="row ">
          <div class="col-12 "> 
            <div class="posts-grid">
              <div class="row">
              @foreach($posts as $post)
                <div class="col-12 col-lg-4 ">
                  <div class="post-box">     <a class="post-link" href="{{route('show_post',$post->id)}}" title="هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة"> 
                      <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="{{asset("storage/$post->image")}}" alt=""><span class="post-date"><span class="day">{{ $post->created_at->format('d M Y') }}</span></div></a>
                    <div class="post-summary">
                      <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>{{$post->type}}</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>{{$post->user}}</a></div>
                      <div class="post-text"><a class="post-link" href="{{route('show_post',$post->id)}}"> 
                          <h2 class="post-title"> {{$post->name}}</h2></a>
                        <p class="post-excerpt">{{$post->description}}</p><a class="read-more" href="{{route('show_post',$post->id)}}" title="هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة">المزيد<i class="bi bi-arrow-left icon "></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="col-12">
                  <!--Start pagination-->
                  
                  <nav class="ma-pagination">
                  <div class="d-flex justify-content-center">
                      {{ $posts->links() }}
                  </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End _3-col-left-sidebar-->
    
@endsection





   