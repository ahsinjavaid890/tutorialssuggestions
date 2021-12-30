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
<section class="bg-disable pb-100">
<div class="container">
    <div class="row gy-lg-0 gy-4">

        <!--======= Left bar ======-->
        <div class="col-lg-8 ">
            <div class="forum-post-widget">
                <div class="widget-header d-flex align-items-center justify-content-between mb-30">
                    <h2 class="mb-0 wow fadeInRight">Ama</h2>

                    <a href="add-question.html" class="action_btn btn-text-medium wow fadeInLeft">Post a
                        Question</a>
                </div>

                <div class="post-filter-widget mb-20 wow fadeInUp">
                    <div class="single-filter-item ">
                        <input type="radio" name="post_filter" id="all_filt">
                        <label for="all_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-1.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-1.2.png')}}" alt="icon"> All
                        </label>
                    </div>
                    <div class="single-filter-item">
                        <input type="radio" name="post_filter" id="populer_filt">
                        <label for="populer_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-2.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-2.2.png')}}" alt="icon">
                            Popular
                        </label>
                    </div>
                    <div class="single-filter-item">
                        <input type="radio" name="post_filter" id="featured_filt">
                        <label for="featured_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-3.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-3.2.png')}}" alt="icon">
                            Featured
                        </label>
                    </div>
                    <div class="single-filter-item">
                        <input type="radio" name="post_filter" id="recent_filt">
                        <label for="recent_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-4.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-4.2.png')}}" alt="icon">
                            Recent
                        </label>
                    </div>
                    <div class="single-filter-item">
                        <input type="radio" name="post_filter" id="unsolved_filt">
                        <label for="unsolved_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-5.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-5.2.png')}}" alt="icon">
                            Unsolved
                        </label>
                    </div>
                    <div class="single-filter-item">
                        <input type="radio" name="post_filter" id="solved_filt">
                        <label for="solved_filt">
                            <img class="main-img" src="{{ asset('/front/img/home_three/filter-icon-6.1.png')}}" alt="icon">
                            <img class="hover-img" src="{{ asset('/front/img/home_three/filter-icon-6.2.png')}}" alt="icon">
                            Solved
                        </label>
                    </div>
                </div>

                <div class="single-forum-post-widget wow fadeInUp">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">This forum is a special forum for general announcements.</a>
                                <span><i class="icon_check_alt2"></i></span>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-jq">jQuery</div>
                            <div class="single-tag tag-php">Php</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.3s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">Welcome to the Cosplayers Group Forum!</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-01.svg')}}" alt="">Getting started
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-wp">WordPress</div>
                            <div class="single-tag tag-php">Php</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.5s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">How i can set non-scroll area in Ama?.</a>
                                <span><i class="icon_check_alt2"></i></span>
                            </h6>

                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-04.svg')}}" alt="">Customers
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-js">JavaScript</div>
                            <div class="single-tag tag-php">Php</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.7s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">Join Ama Discord Community!</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-dvlp">Development</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.3s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">What is the latest version of jQuery ?</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-jq">jQuery</div>
                            <div class="single-tag tag-php">Php</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.7s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">Any tips on how to improve in the future?</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-04.svg')}}" alt="">Customers
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-ecmrc">ecommerce</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.5s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">How to optimize WordPress theme?</a>
                                <span><i class="icon_check_alt2"></i></span>
                            </h6>

                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-wp">WordPress</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.7s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">What is necessary to become a template developer?</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-dvlp">Development</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.3s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">How can i downlaod my hidden items?</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-04.svg')}}" alt="">Customers
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-js">JavaScript</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
                <div class="single-forum-post-widget wow fadeInUp" data-wow-delay="0.7s">
                    <div class="post-content">
                        <div class="post-title">
                            <h6><a href="#">Which software is used for jQuery?</a>
                            </h6>
                        </div>
                        <div class="post-info">
                            <div class="author">
                                <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">Zain Siphron
                            </div>

                            <div class="post-time">
                                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">10 min ago
                            </div>
                            <div class="post-category">
                                <a href="#">
                                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                                </a>
                            </div>
                        </div>
                        <div class="post-tags">
                            <div class="single-tag tag-jq">jQuery</div>
                        </div>
                    </div>
                    <div class="post-reach">
                        <div class="post-view">
                            <img src="{{ asset('/front/img/user-circle-alt.svg')}}" alt="icon">591 Views
                        </div>
                        <div class="post-like">
                            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
                        </div>
                        <div class="post-comment">
                            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
                        </div>
                    </div>
                </div>
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
 <section class="call-to-action cta-bg-3">
            <div class="bg-shapes">
                <div class="shape">
                    <img data-parallax='{"x": -50, "y": 0, "rotateZ":0}' src="{{ asset('/front/img/home_three/cta-shape-1.png')}}" alt="">
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 100, "y": 0, "rotateZ":0}' src="{{ asset('/front/img/home_three/cta-shape-2.png')}}" alt="">
                </div>
              
            </div>
            <div class="container">
                <div class="row action-content-wrapper justify-content-between gy-4 gy-lg-0">
                    <div class="col-lg-8 mt-0">
                        <div class="action-title-wrap title-img d-block d-sm-flex">
                            <img src="img/home_three/cta-emo.png" alt="">
                            <div>
                                <h2 class="action-title">New to Communities?</h2>
                                <p>Its members are ambitious local authorities and development corporations planning and
                                    delivering exemplary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="add-question.html" class="action_btn">Ask a Question </a>
                    </div>
                </div>
            </div>
        </section>
          <section class="client-testimonial-area pt-105">
            <div class="container">
                <h2 class="section-title-h2 text-center wow fadeInUp">What Our Users Say</h2>

                <div class="client-testimonial-slider">
                    <div class="client-testimonial-widget wow fadeInUp">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-1.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Moshrarf Hossan</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
                        </div>
                    </div>
                    <div class="client-testimonial-widget wow fadeInUp" data-wow-delay="0.3s">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-2.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Alfredo Mango</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
                        </div>
                    </div>
                    <div class="client-testimonial-widget wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-3.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Eh Jewel</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
                        </div>
                    </div>
                    <div class="client-testimonial-widget wow fadeInUp" data-wow-delay="0.7s">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-1.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Moshrarf Hossan</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
                        </div>
                    </div>
                    <div class="client-testimonial-widget wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-2.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Alfredo Mango</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
                        </div>
                    </div>
                    <div class="client-testimonial-widget wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget-header">
                            <img src="{{ asset('/front/img/home_three/client-3.png')}}" alt="">
                            <div class="client-info">
                                <h6 class="c-name">Eh Jewel</h6>
                                <span class="c-pos">Ui / Ux Designer</span>
                            </div>
                        </div>
                        <div class="widget-content">
                            <p>Assertively procrastinate distributed relationships whereas equity invested
                                intellectual capital everything</p>
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
