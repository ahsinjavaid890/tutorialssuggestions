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

<div class="container">
    <div class="row ">
        <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
            <h1 class="banner-title-h1 mb-4">Find your query</h1>
            <form action="#" class="header_search_form-2 mx-auto">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Search the Doc">

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
                
                </div>
            </form>


        </div>
    </div>
</div>
</section>
<section class="forum-category-area pt-100 bg-disable pb-lg-115 pb-100">
    <div class="container">
        <h2 class="section-title-h2 text-center mb-60 text-center wow fadeinUp">Browse Categories</h2>
        <div class="row gy-lg-0 gy-4 justify-content-center">
          @foreach($categories as $r)
            <div class="col-custom wow fadeInUp">
                <a href="{{ url('') }}/{{ $r->url }}">
                    <div class="single-category-widget">
                        @if(!empty(Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name))
                            <img src="{{ url('/images/') }}/{{ Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name }}" alt="icon">
                        @endif
                        <h5>{{ $r->name }}</h5>
                        <p>{{ $r->backgroundcolor }}</p>
                        <div class="row">
                            <div class="col-lg-12 co-md-12 col-sm-12">
                               <div class="questiontag">
                                   {{ DB::table('answerquestions')->where('question_subject' , $r->name)->where('delete_status' , 'Active')->count() }} Questions
                               </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-70">
            <a href="{{ url('categories') }}" class="dbl-arrow-upper show-more-btn wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="arrow-cont">
                    <i class="arrow_carrot-down first"></i>
                    <i class="arrow_carrot-down second"></i>
                </div> View All
            </a>
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
<section class="bg-disable pb-100">
<div class="container">
    <div class="row gy-lg-0 gy-4">

        <!--======= Left bar ======-->
        <div class="col-lg-8 ">
            <div class="forum-post-widget">
                @include('frontend.viewquestions')
               
            </div>
        </div>

        <!--======= Right Sidebar =======-->
        <div class="col-lg-4">
            <div class="forum-right-sidebar-widget pl-lg-40">
                <div class="single-widget-box login-widget">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Username">
                        <input type="password" class="form-control mt-20 mb-20" placeholder="Password">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>

                        <button type="submit" class="doc_border_btn doc_border_btn_two w-100">Login</button>
                    </form>
                </div>

                <div class="single-widget-box stat-widget mt-40">
                    <div class="widget-header">
                        <img src="img/img/statistics-icon.png" alt="icon">
                        <h5>Ama Statistics</h5>
                    </div>
                    <div class="row gx-0">
                        <div class="col-4 text-center py-4">
                            <img src="img/img/speech-bubble.png" alt="">
                            <p>Topics</p>
                            <h5>50</h5>
                        </div>
                        <div class="col-4 text-center py-4 border-end border-start">
                            <img src="{{ asset('/font/img/img/writing.png')}}" alt="">
                            <p>Posts</p>
                            <h5>350</h5>
                        </div>
                        <div class="col-4 text-center py-4">
                            <img src="{{ asset('/font/img/img/user-icon.png')}}" alt="">
                            <p>Users</p>
                            <h5>599</h5>
                        </div>
                    </div>
                </div>

                <div class="single-widget-box populer-topics mt-40">
                    <div class="widget-header">
                        <img src="{{ asset('/font/img/speech-bubble.png')}}" alt="icon">
                        <h5>Popular Topics</h5>
                    </div>
                    <div class="widget-content">
                        <div class="single-topic">
                            <span class="topic-no">01</span>
                            <div class="topic-content">
                                <h6><a href="forum-single.html">Cannot reset my password</a></h6>
                                <div class="topic-info">
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-user-outline.svg')}}" alt="">
                                        <span>Zain Siphron</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-calendar-outline.png')}}" alt="">
                                        <span>Apr 15, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-topic">
                            <span class="topic-no">02</span>
                            <div class="topic-content">
                                <h6><a href="forum-single.html">How can I cancel my subscription?</a></h6>
                                <div class="topic-info">
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-user-outline.svg')}}" alt="">
                                        <span>Zain Siphron</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-calendar-outline.png')}}" alt="">
                                        <span>Apr 15, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-topic">
                            <span class="topic-no">03</span>
                            <div class="topic-content">
                                <h6><a href="forum-single.html">Ama a drag-and-drop interaction</a></h6>
                                <div class="topic-info">
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-user-outline.svg')}}" alt="">
                                        <span>Zain Siphron</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-calendar-outline.png')}}" alt="">
                                        <span>Apr 15, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-topic">
                            <span class="topic-no">04</span>
                            <div class="topic-content">
                                <h6><a href="forum-single.html">Can we use API in WordPress?</a></h6>
                                <div class="topic-info">
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-user-outline.svg')}}" alt="">
                                        <span>Zain Siphron</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/front/img/forum/topic-calendar-outline.png')}}" alt="">
                                        <span>Apr 15, 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-widget-box helpful-user mt-40">
                    <div class="widget-header">
                        <img src="{{ asset('/font/img/usre-icon.png')}}" alt="icon">
                        <h5>Most Helpful Users</h5>
                    </div>
                    <div class="widget-content">
                        <div class="single-user">
                            <div class="user-img active">
                                <img src="{{ asset('/front/img/forum/helpful-user/most-h-user-1.png')}}" alt="img">
                            </div>
                            <div class="user-info">
                                <h6><a href="forum-profile.html">Zain Siphron</a></h6>
                                <span>1000 points</span>
                            </div>
                            <img class="img-fluid ms-auto" src="{{ asset('/front/img/forum/helpful-user/first.png')}}" alt="">
                        </div>
                        <div class="single-user">
                            <div class="user-img">
                                <img src="{{ asset('/front/img/forum/helpful-user/most-h-user-2.png')}}" alt="img">
                            </div>
                            <div class="user-info">
                                <h6><a href="forum-profile.html">Corey Saris</a></h6>
                                <span>900 points</span>
                            </div>
                            <img class="img-fluid ms-auto" src="{{ asset('/front/img/forum/helpful-user/second.png')}}" alt="">
                        </div>
                        <div class="single-user">
                            <div class="user-img">
                                <img src="{{ asset('/front/img/forum/helpful-user/most-h-user-3.png')}}" alt="img">
                            </div>
                            <div class="user-info">
                                <h6><a href="forum-profile.html">Kianna Curtis</a></h6>
                                <span>850 points</span>
                            </div>
                            <img class="img-fluid ms-auto" src="{{ asset('/front/img/forum/helpful-user/third.png')}}" alt="">
                        </div>
                        <div class="single-user">
                            <div class="user-img">
                                <img src="{{ asset('/front/img/forum/helpful-user/most-h-user-4.png')}}" alt="img">
                            </div>
                            <div class="user-info">
                                <h6><a href="forum-profile.html">Jaxson Dorwart</a></h6>
                                <span>750 points</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-widget-box tag-widget mt-40">
                    <div class="widget-header">
                        <img src="{{ asset('/front/img/tags-icon.png')}}" alt="icon">
                        <h5>Tags</h5>
                    </div>
                    <div class="widget-content">
                        <ul class="widget-tag-list-2 list-unstyled">
                            <li> <a class="tag-jq" href="#">jQuery</a> </li>
                            <li> <a class="tag-php" href="#">PHP</a> </li>
                            <li> <a class="tag-wp" href="#">WordPress</a> </li>
                            <li> <a class="tag-dvlp" href="#">Development</a> </li>
                            <li> <a class="tag-foram" href="#">Ama</a> </li>
                            <li> <a class="tag-hlp" href="#">help desk</a> </li>
                            <li> <a class="tag-js" href="#">JavaScript</a> </li>
                            <li> <a class="tag-sprt" href="#">support</a> </li>
                            <li> <a class="tag-ecmrc" href="#">ecommerce</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="forum-blog-area pt-100 bg-disable">
    <div class="container">
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
                        <img src="{{ asset('/front/img/home_three/newsletter-ballon.png')}}" alt="img">
                        <img src="{{ asset('/front/img/home_three/newsletter-ballon-bg.png')}}" alt="img">
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
