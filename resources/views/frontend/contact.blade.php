@extends('layouts.app')
@section('title')
<title>Contact Us</title>
<meta name="DC.Title" content="Contact Us">
<meta name="rating" content="general">
<meta name="description" content="Contact Us">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Contact Us">
<meta property="og:description" content="Contact Us">
<meta property="og:site_name" content="Contact Us">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "{{ url('') }}"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Contact Us"
  }]
}
</script>
@endsection
@section('content')


<!-- ==========Contact-Section========== -->
<!-- <section class="contact-section">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
              </nav>
          </div>
      </div>
    </div>
    <img class="img-right" src="{{asset('/front/assets/images/contact/img-right.png')}}" alt="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="content">
                    <div class="section-header">
                        <h6 class="sub-title">
                            Contact Us
                        </h6>
                        <h2 class="title">
                            Get in Touch
                        </h2>
                        <p class="text">
                            We'd love to hear from you! Let us know how we can help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    <div class="single-input">
                        <i class="far fa-user"></i>
                        <input type="text" id="name" placeholder="Full Name">
                    </div>
                    <div class="single-input">
                        <i class="far fa-envelope"></i>
                        <input type="text" id="email" placeholder="Enter Your Email ID">
                    </div>
                    <div class="single-input">
                        <i class="far fa-comments"></i>
                        <textarea id="message" placeholder="Type Your Text" ></textarea>
                    </div>
                    <div id="error"></div>
                    <a onclick="contactus()" href="javascript:void(0)" class="custom-button">Submit</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
        <div class="mobile_main_menu dark_menu sticky-nav menu_one">
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
            <div class="mobile_nav_wrapper">
                <nav class="mobile_nav_top">
                    <ul class="navbar-nav menu ms-auto">
                        <li class="nav-item dropdown submenu ">
                            <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a href="index.html" class="nav-link">Demo 01</a></li>
                                <li class="nav-item"><a href="index-2.html" class="nav-link">Demo 02</a></li>
                                <li class="nav-item "><a href="index-3.html" class="nav-link">Demo 03</a></li>
                                <li class="nav-item "><a href="index-4.html" class="nav-link">Demo 04</a></li>
                                <li class="nav-item "><a href="index-5.html" class="nav-link">Demo 05</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="#">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="Layout_Header-Search-1.html" class="nav-link">Header
                                        Layout 01</a></li>
                                <li class="nav-item"><a href="Layout_Header-Search-2.html" class="nav-link">Header
                                        Layout 02</a></li>
                                <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu ">
                            <a class="nav-link dropdown-toggle" href="forums.html">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item "><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-topics-2.html" class="nav-link">Forum Topics Two</a>
                                </li>
                                <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                                <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                                <li class="nav-item "><a href="add-question.html" class="nav-link">Add Question</a></li>
                                <li class="nav-item"><a href="user-list.html" class="nav-link">User List</a></li>
                                <li class="nav-item"><a href="user-details.html" class="nav-link">User Details</a></li>
                                <li class="nav-item"><a href="badges.html" class="nav-link">User Badges</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <section class="banner-area-9 pt-lg-100 pt-55 pb-100 "
            style="background-image: url(img/breadcrumb/banner-bg.png);">
            <div class="container">
                <div class="row pt-90">
                    <div class=" col-lg-9 doc_banner_content text-center mx-auto">
                        <h2 class="text-white"><span class="banner-title-h1 mb-2">Contact Us</span>
                        </h2>
                        

                    </div>
                </div>
            </div>
        </section>
        <section class="contact_area sec_pad">
            <div class="container">
                <div class="contact_info">
                    <div class="section_title text-start">
                        <h2 class="h_title wow fadeInUp">Contact US</h2>
                        <p>Please email us, we’ll happy to assist you.</p>
                    </div>
                    <form action="#" class="contact_form">
                        
                        <div class="row contact_fill">
                            <div class="col-lg-4 form-group">
                                <h6>Full Name</h6>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your name here">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Email</h6>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="info@Foram.com">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Phone no</h6>
                                <input type="tel" class="form-control" name="tel" id="phone" placeholder="+462">
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Message</h6>
                                <textarea class="form-control message" id="message"
                                    placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn action_btn thm_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<script type="text/javascript">
    function contactus()
    {
        $('#error').show();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        if(name == '' && message == '' && email == '')
        {   
            $("#error").css("color", "red");
            $("#error").css("margin-bottom", "10px");
            $('#error').html('All Fields are Required');
        }else{
            $.ajax({
                type: "GET",
                url: "{{ url('submitcontactus') }}/"+name+"/"+email+"/"+message,
                success: function(resp) {
                    if(resp == 'string')
                    {
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                        $("#error").css("color", "green");
                        $("#error").css("margin-bottom", "10px");
                        $('#error').html('Your Message Submitted Succssfully. We Will Contact you Soon');
                    }
                    setTimeout(function(){ 
                        $('#error').fadeOut();
                     }, 3000);
                }
            });
        } 
    }
</script>
<!-- ==========Contact-Sectionn========== -->
@endsection