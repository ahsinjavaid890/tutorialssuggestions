@extends('layouts.app')
@section('title')
<title>Answerout</title>
<meta name="DC.Title" content="Answerout">
<meta name="rating" content="general">
<meta name="description" content="Answerout">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Answerout">
<meta property="og:description" content="Answerout">
<meta property="og:site_name" content="Answerout">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
@include('admin.alert')
   <section class="banner-area-7 pt-lg-120 pt-90 pb-80 pb-lg-90 user-details-banner">
            
            <div class="container">
                <div class="row gy-3 pt-70 align-items-center">
                    <div
                        class="col-lg-8 d-sm-flex flex-lg-row flex-column align-items-center text-center text-sm-start">
                        <img class="rounded-circle" src="{{ asset('/front/img/user_details/user-img.png')}}" alt="">
                        <div class="user-info ml-lg-60 ms-sm-5 mt-4 mt-lg-0">
                            <h3>Gustavo Dorwart</h3>
                            <ul class="list-unstyled mb-4">
                                <li>Web Developer</li>
                                <li>Boston, MA, United States</li>
                            </ul>
                            <a class="btn follow_btn" href="#">99 Followers</a>
                            <a class="btn follow_btn" href="#">20 Following</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <div class="social-widget text-lg-end">
                            <a class="wow fadeInUp" href="#"><i class="social_facebook"></i></a>
                            <a class="wow fadeInUp" data-wow-delay="0.3s" href="#"><i class="social_linkedin"></i></a>
                            <a class="wow fadeInUp" data-wow-delay="0.5s" href="#"><i class="social_instagram"></i></a>
                            <a class="wow fadeInUp" data-wow-delay="0.7s" href="#"><i class="social_twitter"></i></a>
                        </div>
                        <a class="action_btn ask_btn mt-35" href="#">Ask Questions</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="page_breadcrumb bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Ama WordPress Theme
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Add Question Area =================-->
        <section class=" user-details-area bg-disable pt-100 pb-120">
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="pe-0 col-lg-3 col-xl-2 d-lg-block d-none">
                        <div class="forum-left-sidebar-widget">
                            <ul class="list-unstyled nav-sidebar">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link"><img src="{{ asset('/front/img/side-nav/home.png')}}"
                                            alt="">Home</a>
                                </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="{{ asset('/front/img/side-nav/question.png')}}"
                                            alt="">Qusetions</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="#">New Questions</a></li>
                                        <li><a href="#">Trending Questions</a></li>
                                        <li><a href="#">Must read Questions</a></li>
                                        <li><a href="#">VideoHot Questions</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="{{ asset('/front/img/side-nav/link.png')}}" alt="">Setting</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="{{ asset('/front/img/side-nav/megaphone.png')}}" alt="">Log Out</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-xl-10">
                        <div class="user-details-widget">
                            

                                    <div class="card card-ask box-shadow">
                                    <div class="card-body p-4">
                                        <form enctype="multipart/form-data" method="POST" action="{{ url('/updateuserprofile') }}">
                                            {{ csrf_field() }}
                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Name</label>
                                                        <input type="text" class="form-control" placeholder="First Name" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">Username</label>
                                                        <input  type="text"  class="form-control" placeholder="Username" name="username">
                                                    </div>
                                                    <div id="usernameerror"></div>
                                                </div> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Email</label>
                                                        <input type="text"  class="form-control" placeholder="Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">Contact Number</label>
                                                        <input type="text"  class="form-control" placeholder="Phone No" name="phonenumber">
                                                    </div>
                                                </div> 
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <textarea></textarea>
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <div class="text-right">
                                                <button id="submitbutton" type="submit" class="btn btn-primary btn-block">Sign In</button>
                                                 </div>
                                            </div>
                                                   
                                                </div>
                                                 
                                            </div>                                                              
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                          <!--   <div class="widget-body">
                                <p class="user-text">I am a Graphic Designer based in New York, specializing in User
                                    Interface Design and Development. I build clean, appealing, and functional
                                    interfaces which comply with the latest web standards. But that’s just a part of it.
                                    Design is my life. It’s my five-star spa. It’s my roller-coaster. It’s something I
                                    do before going to bed, and something I can’t wait to do in the mornings. Without
                                    it, my world would be black and white.”</p>

                                <h4>Basic Information</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/calendar.png')}}" alt=""> Age</h6>
                                        <p>25 Years</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/badge.png')}}" alt=""> Experience</h6>
                                        <p>5 Years</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/phone.png')}}" alt=""> Phone</h6>
                                        <p> <a href="tel:12345679">+1 (202) 456 789</a> </p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/location.png')}}" alt=""> Location</h6>
                                        <p>Boston, MA, United States</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/envelope.png')}}" alt=""> Email</h6>
                                        <p><a href="mailto:gustavo@ama.com">gustavo@ama.com</a></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><img src="{{ asset('/front/img/user_details/link.png')}}" alt=""> Visit site</h6>
                                        <p> <a href="https://www.ama.com">www.ama.com</a></p>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                        <div class="row mt-30 gy-4 gy-xl-0">
                            <div class="col-xl-3 col-md-6">
                                <div class="qna-statistics">
                                    <div>
                                        <img src="{{ asset('/front/img/user_details/help-button.png')}}" alt="">
                                    </div>
                                    <div>
                                        <p>Questions</p>
                                        <h5 class="counter">15</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="qna-statistics">
                                    <div>
                                        <img src="{{ asset('/front/img/user_details/comment.png')}}" alt="">
                                    </div>
                                    <div>
                                        <p>Answers</p>
                                        <h5 class="counter">9</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="qna-statistics">
                                    <div>
                                        <img src="{{ asset('/front/img/user_details/crown.png')}}" alt="">
                                    </div>
                                    <div>
                                        <p>Best Answers</p>
                                        <h5 class="counter">299</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="qna-statistics">
                                    <div>
                                        <img src="{{ asset('/front/img/user_details/star.png')}}" alt="">
                                    </div>
                                    <div>
                                        <p>Points</p>
                                        <h5 class="counter">5</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection