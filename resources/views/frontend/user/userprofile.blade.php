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
<i class="icon_profile"></i> Profile
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
aria-controls="profile" aria-selected="false">
<i class="icon_documents"></i> Topics Started
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
aria-controls="contact" aria-selected="false">
<i class="icon_chat"></i> Replies Created
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link" id="fav-tab" data-bs-toggle="tab" href="#fav" role="tab"
aria-controls="fav" aria-selected="false">
<i class="icon_heart"></i> Favorites
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="forum_body_area">
<div class="forum_topic_list">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel"
aria-labelledby="home-tab">
<div class="profile_info">
<div class="row p_info_item_inner">
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-1.png" alt="">
            <a href="#">
                <h4>Forum Role</h4>
            </a>
            <a class="info_btn" href="#">Keymaster</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-2.png" alt="">
            <a href="#">
                <h4>Topics Started</h4>
            </a>
            <a class="info_number" href="#">32</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-3.png" alt="">
            <a href="#">
                <h4>Replies Created</h4>
            </a>
            <a class="info_number" href="#">76</a>
        </div>
    </div>
</div>
<ul class="navbar-nav info_list">
    <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
    <li><span>Age:</span><a href="#">32</a></li>
    <li><span>Gender:</span><a href="#">Male</a></li>
    <li><span>Location:</span><a href="#">Berlin</a></li>
    <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
            customers,
            our unique themes, templates</a></li>
    <li><span>Website: </span><a
            href="#">https://html.spider-themes.com/Foram/</a></li>
    <li><span>Blog:</span><a
            href="#">https://wp.spider-themes.com/Foram/</a>
    </li>
    <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
</ul>
<ul class="nav p_social">
    <li><a href="#"><i class="social_facebook"></i></a></li>
    <li><a href="#"><i class="social_twitter"></i></a></li>
    <li><a href="#"><i class="social_pinterest"></i></a></li>
</ul>
</div>
</div>
<div class="tab-pane fade" id="profile" role="tabpanel"
aria-labelledby="profile-tab">
<div class="input-group search_forum">
<input type="text" class="form-control" placeholder="Recipient's username"
    aria-label="Recipient's username" aria-describedby="button-addon2">
<div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button"
        id="button-addon2"><i class="icon_search"></i></button>
</div>
</div>
<h2>Forum Topics Started</h2>
<div class="forum_l_inner">
<div class="forum_head d-flex justify-content-between">
    <ul class="nav left">
        <li><i class="icon_error-circle_alt"></i> 576 Open</li>
        <li><a href="#"><i class=" icon_check"></i> 2,974 Closed</a></li>
    </ul>
    <ul class="nav right">
        <li>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button"
                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Author <i class="arrow_carrot-down"></i>
                </button>
                <div class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton">
                    <h3 class="title">Filter by author</h3>
                    <form action="#" class="cate-search-form">
                        <input type="text" placeholder="Search users"
                            id="search_field2">
                    </form>
                    <div class="all_users scroll">
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-1.png" alt="">
                            Donny
                            Peters</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-2.png"
                                alt="">Linh Knapp</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-3.png"
                                alt="">Albert
                            Roach</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-4.png"
                                alt="">Kristin
                            Larsen</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-5.png"
                                alt="">Ernest
                            Patton</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-2.png"
                                alt="">Linh Knapp
                            Patton</a>
                        <a class="dropdown-item" href="#"><img
                                src="img/forum/filter-user-1.png"
                                alt="">Donny
                            Peters</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown right_dir">
                <button class="btn dropdown-toggle" type="button"
                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Label <i class="arrow_carrot-down"></i>
                </button>
                <div class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton2">
                    <h3 class="title">Filter by label</h3>
                    <form action="#" class="cate-search-form">
                        <input type="text" placeholder="Search users"
                            id="search_field1">
                    </form>
                    <div class="all_users scroll">
                        <a class="dropdown-item" href="#"><span
                                class="color red"></span>
                            bugs</a>
                        <a class="dropdown-item" href="#"><span
                                class="color blue"></span>
                            request/feature</a>
                        <a class="dropdown-item" href="#"><span
                                class="color dark_blue"></span> Developer
                            Edition</a>
                        <a class="dropdown-item" href="#"><span
                                class="color green"></span>help wanted</a>
                        <a class="dropdown-item" href="#"><span
                                class="color pink"></span>question</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button"
                    id="dropdownMenuButton3" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Assignee <i class="arrow_carrot-down"></i>
                </button>
                <div class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton3">
                    <h3 class="title">Filter by author</h3>
                    <form action="#" class="cate-search-form">
                        <input type="text" placeholder="Search users"
                            id="search_field3">
                    </form>
                    <div class="all_users short-by scroll">
                        <a class="dropdown-item active-short" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Newest
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Oldest
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Most
                            commented
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Least
                            commented
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Recently
                            updated
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Recently
                            updated
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown right_dir">
                <button class="btn dropdown-toggle" type="button"
                    id="dropdownMenuButton4" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sort <i class="arrow_carrot-down"></i>
                </button>
                <div class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton4">
                    <h3 class="title">Filter by author</h3>
                    <form action="#" class="cate-search-form">
                        <input type="text" placeholder="Search users"
                            id="search_field">
                    </form>
                    <div class="all_users short-by scroll">
                        <a class="dropdown-item active-short" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Newest
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Oldest
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Most
                            commented
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Least
                            commented
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Recently
                            updated
                        </a>
                        <a class="dropdown-item" href="#">
                            <ion-icon name="checkmark-outline"></ion-icon>
                            Recently
                            updated
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="forum_body">
    <ul class="navbar-nav topic_list">
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-1.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Workspace/Org Administration</h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-1.png" alt=""> Docs
                            WordPress
                            Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 3 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>45</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>32</a>
                </div>
            </div>
        </li>
        <li class="check">
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-2.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Course do not display properly</h4>
                        </a>
                        <a class="docbuzz" href="#">Docbuzz</a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-2.png" alt=""> Docbuzz
                            knowledge base template</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 8 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>20</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>12</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-3.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>How to add a different logo image to the NON
                                Sticky header?</h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-3.png" alt="">Rogan
                            WordPress Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 9 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>14</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>10</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-4.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Sticky navbar is shown, but state is
                                inactive
                            </h4>
                        </a>
                        <a class="docbuzz yellow" href="#">Improvement !</a>
                        <a class="docbuzz gray" href="#">CSS</a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-4.png" alt=""> Product
                            Landing Page</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> 1 day, 4 hours ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>33</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>42</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-5.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Performance issue uikit v3 and C3js</h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-5.png"
                                alt="">Responsive
                            wp Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 3 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>15</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>20</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-6.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Course do not display properly</h4>
                        </a>
                        <a class="docbuzz green" href="#">Feature</a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-6.png" alt="">Rogan
                            WordPress Theme...</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 2 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>16</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>13</a>
                </div>
            </div>
        </li>
        <li class="check">
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-7.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Apps/Integrations/APIs</h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-7.png" alt="">Apps
                            WordPress Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 9 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>20</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>33</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-8.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Course do not display properly</h4>
                        </a>
                        <a class="docbuzz orange" href="#">Spider theme</a>
                        <a class="docbuzz pest" href="#">Open</a>
                    </div>

                    <a href="#">
                        <h6><img src="img/icon/f-icon-8.png" alt="">Startup
                            and
                            App WP Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 10 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>24</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>14</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-9.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>UK-form-custom / select / multiple </h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-9.png" alt="">Clean
                            Email
                            Template</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 9 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>18</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>20</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-10.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Change “courses” in URL permalink base</h4>
                        </a>
                        <a class="docbuzz pink" href="#">Bug !</a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-10.png"
                                alt="">Freebies
                            Blog WordPress Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 7 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>21</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>16</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-2.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Disable animations for ui testing</h4>
                        </a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-11.png" alt="">T-Shirt
                            Store PrestaShop Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 9 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>23</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>11</a>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-11.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Lightbox zoom on mobile device</h4>
                        </a>
                        <a class="docbuzz greenl" href="$">Docs</a>
                    </div>
                    <a href="#">
                        <h6><img src="img/icon/f-icon-5.png" alt="">Attorney
                            WordPress Theme</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> updated 9 days ago
                    </h6>
                </div>
                <div class="media-right">
                    <a class="count " href="#"><i
                            class="icon_chat_alt"></i>26</a>
                    <a class="count rate" href="#"><i
                            class="icon_star"></i>08</a>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
                                        <div class="list_pagination d-flex justify-content-between">
                                            <div class="left">
                                                <p>Viewing 30 topics - 1 through 3 (of 45 total)</p>
                                            </div>
                                            <div class="right">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item active"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#"><i
                        class="arrow_carrot-right"></i></a></li>
        </ul>
    </nav>
</div>
</div>
</div>
<div class="tab-pane fade " id="contact" role="tabpanel"
aria-labelledby="contact-tab">
<div class="input-group search_forum">
<input type="text" class="form-control" placeholder="Your work email"
    aria-label="Recipient's username" aria-describedby="button-addon2">
<div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button"
        id="button-addon3"><i class="icon_search"></i></button>
</div>
</div>
<h2>Forum Topics Started</h2>
<div class="forum_l_inner comment_l">
<div class="forum_head d-flex justify-content-between">
    <ul class="nav right">
        <li>
            <div class="dropdown list_sirt">
                <button class="btn dropdown-toggle" type="button"
                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Sirt by <i class="arrow_carrot-down"></i>
                </button>
                <div class="dropdown-menu short-by"
                    aria-labelledby="dropdownMenuButton5">
                    <a class="dropdown-item active-short"
                        href="#0">Oldest</a>
                    <a class="dropdown-item" href="#0">Newest</a>
                    <a class="dropdown-item" href="#0">First Comments</a>
                    <a class="dropdown-item" href="#0">New Comments</a>
                </div>
            </div>
        </li>
    </ul>
    <div class="page">Page 1 of 4</div>
</div>
<div class="forum_body">
    <ul class="navbar-nav topic_comment_list">
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-2.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Eh Jewel</h4>
                        </a>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Flag as
                                inappropriate</a>
                            <a class="dropdown-item" href="#">Get direct
                                link</a>
                        </div>
                    </div>
                    <a href="#">
                        <h6><i class="icon_check_alt"></i> Moderator</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> January 16 at 10:32 PM
                    </h6>
                    <p>Cheeky chap jolly good mufty a load of old tosh I
                        don't want no agro a chinwag amongst tickety-boo,
                        tosser victoria sponge horse play happy days give us
                        a bell nice one cup of tea young delinquent wellies,
                        cockup absolutely bladdered barmy bleeding.!</p>
                    <div class="button_list">
                        <a class="reply_btn" href="#">Reply</a>
                        <a class="help_btn" href="#">Helpful</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-7.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Penny Tool</h4>
                        </a>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Flag as
                                inappropriate</a>
                            <a class="dropdown-item" href="#">Get direct
                                link</a>
                        </div>
                    </div>
                    <a href="#">
                        <h6><i class="icon_check_alt"> </i>Moderator</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> January 22 at 09:44 AM
                    </h6>
                    <p>That cockup bleeding skive off such a fibber cup of
                        char squiffy car boot, lemon squeezy lavatory
                        Richard jolly good tosser excuse my French, mush
                        barney.</p>
                    <div class="button_list">
                        <a class="reply_btn" href="#">Reply</a>
                        <a class="help_btn" href="#">Helpful</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-12.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Dianne Ameter</h4>
                        </a>
                    </div>
                    <a class="help_start" href="#"><i class="icon_star"></i>
                        Helpful</a>
                    <a href="#">
                        <h6> <i class="icon_check_alt"></i>Moderator</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> January 18 at 11:24 AM
                    </h6>
                    <p>Cheeky chap jolly good mufty a load of old tosh I
                        don't want no agro a chinwag amongst tickety-boo,
                        tosser victoria sponge horse play happy days give us
                        a bell nice one cup.!</p>
                    <div class="button_list">
                        <a class="reply_btn" href="#">Reply</a>
                        <a class="help_btn" href="#">Helpful</a>
                    </div>

                </div>
            </div>
        </li>
        <li>
            <div class="media">
                <div class="d-flex">
                    <img class="rounded-circle" src="img/forum/user-13.png"
                        alt="">
                </div>
                <div class="media-body">
                    <div class="t_title">
                        <a href="#">
                            <h4>Pelican Steve</h4>
                        </a>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            ...
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Flag as
                                inappropriate</a>
                            <a class="dropdown-item" href="#">Get direct
                                link</a>
                        </div>
                    </div>
                    <a href="#">
                        <h6>Explore</h6>
                    </a>
                    <h6><i class="icon_calendar"></i> March 12 at 10:25 PM
                    </h6>
                    <p>That cockup bleeding skive off such a fibber cup of
                        char squiffy car boot, lemon squeezy lavatory
                        Richard jolly good tosser excuse my French, mush
                        barney.</p>
                    <div class="button_list">
                        <a class="reply_btn" href="#">Reply</a>
                        <a class="help_btn" href="#">Helpful</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
<div class="list_pagination d-flex justify-content-between">
<div class="left">
    <p>Viewing 30 topics - 1 through 3 (of 45 total)</p>
</div>
<div class="right">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a>
            </li>
            <li class="page-item"><a class="page-link" href="#"><i
                        class="arrow_carrot-right"></i></a></li>
        </ul>
    </nav>
</div>
</div>
</div>
<div class="tab-pane fade " id="eng" role="tabpanel">
<div class="profile_info">
<div class="row p_info_item_inner">
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-1.png" alt="">
            <a href="#">
                <h4>Forum Role</h4>
            </a>
            <a class="info_btn" href="#">Keymaster</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-2.png" alt="">
            <a href="#">
                <h4>Topics Started</h4>
            </a>
            <a class="info_number" href="#">32</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-3.png" alt="">
            <a href="#">
                <h4>Replies Created</h4>
            </a>
            <a class="info_number" href="#">76</a>
        </div>
    </div>
</div>
<ul class="navbar-nav info_list">
    <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
    <li><span>Age:</span><a href="#">32</a></li>
    <li><span>Gender:</span><a href="#">Male</a></li>
    <li><span>Location:</span><a href="#">Berlin</a></li>
    <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
            customers,
            our unique themes, templates</a></li>
    <li><span>Website: </span><a
            href="#">https://html.spider-themes.com/Foram/</a></li>
    <li><span>Blog:</span><a
            href="#">https://wp.spider-themes.com/Foram/</a>
    </li>
    <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
</ul>
<ul class="nav p_social">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
</ul>
</div>
</div>
<div class="tab-pane fade " id="fav" role="tabpanel" aria-labelledby="fav-tab">
<div class="profile_info">
<div class="row p_info_item_inner">
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-1.png" alt="">
            <a href="#">
                <h4>Forum Role</h4>
            </a>
            <a class="info_btn" href="#">Keymaster</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-2.png" alt="">
            <a href="#">
                <h4>Topics Started</h4>
            </a>
            <a class="info_number" href="#">32</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="p_info_item">
            <img src="img/icon/p-icon-3.png" alt="">
            <a href="#">
                <h4>Replies Created</h4>
            </a>
            <a class="info_number" href="#">76</a>
        </div>
    </div>
</div>
<ul class="navbar-nav info_list">
    <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
    <li><span>Age:</span><a href="#">32</a></li>
    <li><span>Gender:</span><a href="#">Male</a></li>
    <li><span>Location:</span><a href="#">Berlin</a></li>
    <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
            customers,
            our unique themes, templates</a></li>
    <li><span>Website: </span><a
            href="#">https://html.spider-themes.com/Foram/</a></li>
    <li><span>Blog:</span><a
            href="#">https://wp.spider-themes.com/Foram/</a>
    </li>
    <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
</ul>
<ul class="nav p_social">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
</ul>
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