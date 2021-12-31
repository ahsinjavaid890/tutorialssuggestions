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
  
<div class="mobile_main_menu  sticky-nav menu_one">
            <div class="container">
                <div class="mobile_menu_left">
                    <button type="button" class="navbar-toggler mobile_menu_btn">
                        <span class="menu_toggle ">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <a class="navbar-brand header_logo" href="index.html">
                        <img class="sticky_logo " src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="main_logo white_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
                <div class="mobile_menu_right">
                    <div class="right-nav">
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something2" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something2" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something2"></label>
                            <input type="checkbox" name="something2" id="something2" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="side_menu">
            <div class="mobile_menu_header">
                <div class="close_nav">
                    <i class="icon_close"></i>
                </div>
                <div class="mobile_logo">
                    <a class="navbar-brand header_logo me-0" href="index.html">
                        <img class="sticky_logo main_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="white_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
            </div>
           
        </div>
        <section class="doc_banner_area single_breadcrumb">
            <ul class="list-unstyled banner_shap_img">
                <li><img src="img/new/banner_shap1.png" alt=""></li>
                <li><img src="img/new/banner_shap2.png" alt=""></li>
                <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="img/new/plus1.png" alt=""></li>
                <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="img/new/plus2.png" alt=""></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="container">
                <div class="doc_banner_content">
                    <h2 class="text-white">Lance Bogrol</h2>
                </div>
            </div>
        </section>
        <!--================Forum Content Area =================-->
        <section class="forum-user-wrapper">
            <div class="container">
                <div class="row forum_main_inner">
                    <div class="col-lg-3">
                        <div class="author_option">
                            <div class="author_img">
                                <img class="img-fluid" src="img/forum/author-1.jpg" alt="">
                            </div>
                            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">
                                        <i class="icon_profile"></i> Home
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false" >
                                        <i class="icon_documents"></i> Questions<span class="dropdown-toggle arrows"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">any questions</a></li>
                                            
                                        </ul>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="icon_chat"></i> Setting
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="fav-tab" data-bs-toggle="tab" href="#fav" role="tab"
                                        aria-controls="fav" aria-selected="false">
                                        <i class="icon_heart"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection