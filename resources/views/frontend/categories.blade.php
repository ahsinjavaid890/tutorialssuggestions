@extends('layouts.app')
@section('title')
<title>Categories</title>
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
    "name": "Categories"
  }]
}
</script>
@endsection
@section('content')

 <section class="banner-area-9 pt-lg-100 pt-55 pb-100 "
            style="background-image: url(img/breadcrumb/banner-bg.png);">
            <div class="container">
                <div class="row pt-90">
                    <div class=" col-lg-9 doc_banner_content text-center mx-auto">
                        <h2 class="text-white"><span class="banner-title-h1 mb-2">Categories</span>
                        </h2>
                        

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
                        <img src="{{ asset('/front/img/home_three/forum-catagory-01.svg')}}" alt="icon">
                        <h5>Getting started</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.3s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="icon">
                        <h5>Announcements</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.5s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="{{ asset('/front/img/home_three/forum-catagory-03.svg')}}" alt="icon">
                        <h5>Authors</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.7s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="{{ asset('/front/img/home_three/forum-catagory-04.svg')}}" alt="icon">
                        <h5>Customers</h5>
                    </div>
                </a>
            </div>
            <div class="col-custom wow fadeInUp" data-wow-delay="0.9s">
                <a href="#">
                    <div class="single-category-widget">
                        <img src="{{ asset('/front/img/home_three/forum-catagory-05.svg')}}" alt="icon">
                        <h5>Technology</h5>
                    </div>
                </a>
            </div>


        </div>

    </div>
</section>




<!-- <section class="profile-section single-community">
        <div class="container">
            <div class="row mt-100">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
                      </ol>
                    </nav>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="top-question-banner">
                        {!! Cmf::site_settings('question_detail_page_top') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach($data as $r)
                        <div class="col-xl-4 col-md-4 col-lg-4 col-md-6 col-6">
                            <a style="width: 100%;" href="{{ url('') }}/{{ $r->url }}">
                                <div class="card card-explore card-category" style="{{ $r->backgroundcolor  }} ">
                                    <div class="card-body text-center">
                                        @if(!empty(Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name))
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <img class="category-img" src="{{ url('/images/') }}/{{ Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name }}">
                                            </div>
                                        </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1 style="{{ $r->text_color }}" class="categories-title">{{ $r->name }}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ads">
                        {!! Cmf::site_settings('right_add_1') !!}
                    </div>
                    <div class="ads">
                        {!! Cmf::site_settings('right_add_2') !!}
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection
