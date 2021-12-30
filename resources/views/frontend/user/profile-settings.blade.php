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
                                    <span class="icon" ><i class="arrow_carrot-down" ></i></span>
                                    <ul class="list-unstyled dropdown_nav" >
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
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>About Info</label>
                                                        <textarea class="form-control"></textarea>
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
                             <div class="user-details-widget security">
                                    <div class="card card-ask box-shadow">
                                    <div class="card-body p-4">
                                        <form enctype="multipart/form-data" method="POST" action="{{ url('/updateuserprofile') }}">
                                            {{ csrf_field() }}
                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Security </h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="firstname">Old Password</label>
                                                        <input type="text" class="form-control" placeholder="First Name" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                     <div class="form-group">
                                                        <label for="lastname">New Password</label>
                                                        <input  type="text"  class="form-control" placeholder="N.Password">
                                                    </div>
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Re-type Password</label>
                                                        <input type="text"  class="form-control" placeholder="R.Password" >
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <div class="text-right">
                                                <button id="submitbutton" type="submit" class="btn btn-primary btn-block">Save</button>
                                                 </div>
                                            </div>
                                                   
                                                </div>
                                                 
                                            </div>                                                              
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>

        </section>
@endsection