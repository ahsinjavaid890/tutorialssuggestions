@extends('layouts.app')
@section('title')
<title>Answers to all {{ $category->name }} Questions</title>
<meta name="DC.Title" content="Answers to all {{ $category->metta_tittle }} Questions">
<meta name="rating" content="general">
<meta name="description" content="{{ $category->metta_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="{{ $category->metta_tittle }}">
<meta property="og:description" content="Answerout">
<meta property="og:site_name" content="Answerout">
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
    "name": "Explore",
    "item": "{{url('/categories')}}"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "{{ $category->name }}"
  }]
}
</script>
@endsection
@section('content')
<section class="banner-area-9 pt-lg-100 pt-55 pb-100 "
            style="background-image: url(img/breadcrumb/banner-bg.png);">
    <div class="container">
         <div class="row">
        <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
            <h1 class="banner-title-h1 mb-4">Find your query</h1>
            <form action="#" class="header_search_form-2 mx-auto">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Find your query in {{ $category->name }}" />

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

            </form>


        </div>
    </div>
    </div>
</section>
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
@endsection
