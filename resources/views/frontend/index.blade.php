@extends('layouts.app')
@section('title')
<title>Answer Out - Get Your Query Answered Out</title>
<meta name="DC.Title" content="Answerout - Answer For Your Query | Certification &amp; Answers">
<meta name="rating" content="general">
<meta name="description" content="Answerout">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Answerout - Answer For Your Query | Certification &amp; Answers">
<meta property="og:description" content="Answerout">
<meta property="og:site_name" content="Answerout - Answer For Your Query | Certification &amp; Answers">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
<section class="banner-area-4 pt-lg-120 pt-55 pb-120 has_search">
<div class="banner-shapes">
    <div class="shape">
        <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/home_three/banner-shape-1.png"
            alt="shape">
    </div>
    <div class="shape">
        <img data-parallax='{"x":50 , "y": 0, "rotateZ":0}' src="img/home_three/banner-shape-2.png"
            alt="shape">
    </div>
    <div class="shape">
        <img data-parallax='{"x": 250, "y": 0, "rotateZ":0}' src="img/home_three/banner-shape-3.png"
            alt="shape">
    </div>

</div>
<div class="container">
    <div class="row pt-120 pb-30">
        <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
            <h1 class="banner-title-h1 mb-4">Need some help with Ama?</h1>
            <form action="#" class="header_search_form-2 mx-auto">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Search the Doc" />

                            <div class="header_search_form_panel">
                                <ul class="list-unstyled">
                                    <li>Help Desk
                                        <ul class="list-unstyled search_item">
                                            <li><span>Configuration</span><a href="#">How to edit host and
                                                    port?</a></li>
                                            <li><span>Configuration</span><a href="#">The dev Property</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Support
                                        <ul class="list-unstyled search_item">
                                            <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                        </ul>
                                    </li>
                                    <li>Documentation
                                        <ul class="list-unstyled search_item">
                                            <li><span>Getting Started</span><a href="#">The asyncData
                                                    Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData
                                                    Method</a>
                                            </li>
                                            <li><span>Getting Started</span><a href="#">The asyncData
                                                    Method</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="header_search_keyword search-white mt-3">
                    <span class="header-search-form__keywords-label">Popular topics:</span>
                    <ul class="list-unstyled">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Forums</a>,
                        <li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Getting stated</a>,</li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Introduction</a>,</li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Payment</a></li>
                    </ul>
                </div>
            </form>


        </div>
    </div>
</div>
</section>
<section class="forum-category-area pt-100 bg-disable pb-lg-115 pb-100">
    <div class="container">
        <h2 class="section-title-h2 text-center mb-60 text-center wow fadeinUp">Amas Categories</h2>
        <div class="row gy-lg-0 gy-4 justify-content-center">
            <div class="col-custom wow fadeInUp">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="img/home_three/forum-catagory-01.svg" alt="icon">
                        <h5>Getting started</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.3s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="img/home_three/forum-catagory-02.svg" alt="icon">
                        <h5>Announcements</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.5s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="img/home_three/forum-catagory-03.svg" alt="icon">
                        <h5>Authors</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.7s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="img/home_three/forum-catagory-04.svg" alt="icon">
                        <h5>Customers</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.9s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="img/home_three/forum-catagory-05.svg" alt="icon">
                        <h5>Technology</h5>
                    </div>
                </a>
            </div>


        </div>

    </div>
</section>
<!-- <section class="profile-section single-community pb-special-banner main-banner-mr-top" id="mt-banner-top">
    <div class="container-fluid p-0">
      <div class="bg-home-banner">
        <div class="row" style="margin-right: 0px !important; margin-left: 0px !important">
          <div class="col-lg-5 col-md-5 col-sm-7">

          </div>
          <div class="col-lg-6 col-md-7 col-sm-5">

            <div class="row mt-5 ml-1">
                <div class="col-lg-11 offset-lg-1 col-md-11 offset-md-1  ml-5 ml-xs-0">
                    <h4 class="nerdy-pen__text">Find Answers to Thousands of Questions from <span class="txt-rotate" data-period="2000"data-rotate='[ "Geography.", "Biology.", "Mathematics.", "Chemistry.", "Physics.", "Business.", "English.", "Computer & Technology.", "French.", "Geography.", "Health.", "Mathematics.", "SAT.", "Social Studies", "Spanish", "World Language" ]'> </span>
                    </h4>
                    <p class="banner-text mt-3">Every Month over a million users find answers to their questions. We hope you find yours too..</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 ml-3 ml-xs-0 mt-5 mb-top-search">
                    <div class="input-group mb-3" id="main-search-field">
                      <input type="text" placeholder="Type your question......" class="form-control main-search-banner ml-5" onkeyup="searchbanner()" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      <div class="input-group-prepend">
                        <span onclick="clickonsearch()" class="input-group-text" id="basic-addon1"><img class="search-icon" alt="search" width="80px"></span>
                      </div>
                    </div>

                    <div style="display: none;" id="livesearchbanner"></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> -->
<!-- ==========Features-Section========== -->
<section class="feature-section extra-feature pt-0 pb-mine mt-top--100">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h3>Subjects</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="registered-slider owl-carousel">
                    <div class="single-slider text-center">
                        <a href="{{url('/categories')}}" class="btn btn-theme btn-slider">All</a>
                    </div>
                    @foreach($categories as $r)
                    <div class="single-slider text-center">

                        <a href="{{url('')}}/{{ $r->url }}" class="btn btn-theme btn-slider">
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    @if(!empty(Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name))
                                    <img class="home-cat-icon" src="{{ url('/images/') }}/{{ Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name }}">

                                    @endif
                                </div>
                                <div class="col-md-9 col-8"><span class="cat-text-limit">{!! Str::limit($r->name, 8) !!}</span></div>
                            </div>
                            </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Features-Section========== -->
<!-- ==========Update-profile-Section========== -->
<section class="update-profile-section">
    <div class="hero-body">
            <div class="container">

                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <h3>Get the top rated result, in just a sec.</h3>
                    </div>
                </div>
                <br>
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <img width="230px" src="{{asset('/front/assets/images/shahzad/landing-ratings.svg')}}" alt="answerout">
                    </div>
                </div>
                <div id="customers-testimonials" class="owl-carousel mt-2">
                    @foreach(DB::table('testimonials')->where('status' , 'Published')->get() as $r)
                    <div class="box">
                        <div class="level-item">
                            <div>
                                <div class="heading">
                                    <img class="avatar" src="{{ url('/images/') }}/{{ $r->image }}" width="100px" height="100px">
                                </div>
                                <div class="row p-3">
                                    <div class="col-md-12 text-center">
                                        <p>“{{ $r->testimonial }}”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
</section>
<!-- ==========Update-profile-Section========== -->
<section class="feature-section extra-feature pt-0 pb-mine mt-top--100">
    <div class="container">
        <div class="row mb-5 mt-3">
            <div class="col-md-12 text-center">
                <h3>Blog Categories</h3>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="registered-slider owl-carousel">


                    <div class="single-slider text-center">
                        <a href="{{url('/study-tools')}}" class="btn btn-theme btn-slider">
                            <div class="row">
                                <div class="col-md-12 col-12"><span class="cat-text-limit">Study Tools</span></div>
                            </div>
                            </a>
                    </div>

                    <div class="single-slider text-center">
                        <a href="{{url('/colleges-and-education')}}" class="btn btn-theme btn-slider">
                            <div class="row">
                                <div class="col-md-12 col-12"><span class="cat-text-limit">College & Education</span></div>
                            </div>
                            </a>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</section>
<section class="forum-blog-area pt-100 bg-disable">
    <div class="container">
        <h2 class="section-title-h2 mb-60 text-center wow fadeInUp">Ama Blogs</h2>
        <div class="row gy-4 gy-lg-0 justify-content-center">
            <?php $count = 0; ?>
          @foreach($blogs as $r)
          @if(!empty(Cmf::get_image_name('blogimages' , 'blogid' , $r->id)->first()->image_name))
            <div class="col-lg-4 col-sm-6 wow fadeInUp">
                <div class="single-forum-blog-widget">
                    <div class="blog-img">

                        @if(!empty(Cmf::get_image_name('blogimages' , 'blogid' , $r->id)->first()->image_name))
                        <img  src="{{ url('/images/') }}/{{ Cmf::get_image_name('blogimages' , 'blogid' , $r->id)->first()->image_name }}"  alt="" >
                        @endif
                    </div>

                    <div class="blog-content">
                        <div class="blog-info">
                            <div class="post-date">
                                <img src="img/home_two/calendar-outline.svg" alt="icon">
                                March 18, 2021
                            </div>
                        </div>
                        <h5><a href="{{ url('') }}/{{ $r->url }}">{!! Str::limit($r->name) !!}</a>
                        </h5>
                    </div>
                </div>
            </div>
             @endif
            @endforeach
        </div>
        <div class="text-center mt-70">
            <a href="#" class="dbl-arrow-upper show-more-btn wow fadeInUp">
                <div class="arrow-cont">
                    <i class="arrow_carrot-down first"></i>
                    <i class="arrow_carrot-down second"></i>
                </div> Show More
            </a>
        </div>


        <div class="newsletter-form-widget">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-6 order-lg-1 order-2 wow fadeInRight pe-lg-0">
                    <h2>Follow our newsletter</h2>
                    <p>We will send you most of the amazing recipes that you will to see every day. Try it, you
                        can
                        always unsubscribe</p>
                    <div class="form-group">
                        <input type="text" placeholder="Enter your email here">
                        <button class="action_btn" type="submit">Subscribe</button>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end text-center order-lg-2 order-1 wow fadeInLeft">
                    <div class="newsletter-img position-relative d-inline-block">
                        <img src="img/home_three/newsletter-ballon.png" alt="img">
                        <img src="img/home_three/newsletter-ballon-bg.png" alt="img">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript">
    function clickonsearch()
    {
        var value = $('.main-search-banner').val();
        if(value == '')
        {
            $('.main-search-banner').focus();
        }else{
            var mainurl = '{{ url('search') }}';
            var value = $('.main-search-banner').val();
            location.replace(mainurl+'/'+value);
        }
    }
    function searchbanner()
        {
            var mainurl = '{{ url('') }}';

            var value = $('.main-search-banner').val();
            if(value == '')
            {
                $('#livesearchbanner').hide();
            }else{
                $.ajax({
                    type: "GET",
                    url: mainurl+'/searchnavbar/'+value,
                    success: function(resp) {
                        $('#livesearchbanner').show();
                        $('#livesearchbanner').html(resp);
                    }
                });
            }
        }
        $(document).on('keypress',function(e) {
            if(e.which == 13) {
               var mainurl = '{{ url('search') }}';
               var value = $('.main-search-banner').val();
               location.replace(mainurl+'/'+value);
            }
        });
</script>

<script type="text/javascript">
    $(document).ready(function(){

          $('#carousel').owlCarousel( {
        loop: true,
        center: true,
        items: 3,
        margin: 50,
        autoplay: true,
        dots:true,
    nav:true,
        autoplayTimeout: 2500,
        smartSpeed: 450,
    navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });
    });
</script>


    <script>
        var TxtRotate = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 300 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
          }

          setTimeout(function() {
            that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #fff }";
          document.body.appendChild(css);
        };
    </script>



@endsection
