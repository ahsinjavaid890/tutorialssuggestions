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
         <div class="row">
        <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
            <h1 class="banner-title-h1 mb-4">Find your query</h1>
            <form action="#" class="header_search_form-2 mx-auto">
                <div class="header_search_form_info">
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="icon_search"></i>
                            <input type='search' id="searchbox" autocomplete="off" name="search"
                                placeholder="Find your query" />

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
<section class="forum-category-area  bg-disable pb-lg-115 pb-100">
    <div class="container">
        <div class="row gy-lg-0 gy-4 justify-content-center">
            @foreach($data as $r)
            <div class="col-custom wow fadeInUp">
                <a href="{{ url('') }}/{{ $r->url }}">
                    <div class="single-category-widget">
                        @if(!empty(Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name))
                            <img src="{{ url('/images/') }}/{{ Cmf::get_image_name('subjectimages' , 'subjectid' , $r->id)->first()->image_name }}" alt="icon">
                        @endif
                        
                        <h5>{{ $r->name }}</h5>
                        <p>{{ $r->backgroundcolor }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
