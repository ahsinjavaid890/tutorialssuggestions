@extends('layouts.app')
@section('title')
<title>Blog</title>
<meta name="DC.Title" content="Blog">
<meta name="rating" content="general">
<meta name="description" content="Blog">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Blog">
<meta property="og:description" content="Blog">
<meta property="og:site_name" content="Blog">
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
    "name": "Blog"
  }]
}
</script>
@endsection
@section('content')
<section class="banner-area-7 pt-110 pb-100 has_search">

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
                                placeholder="Find your query"
                                >

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
<section class="page_breadcrumb bg-transparent">
    <div class="container ">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/blogs')}}">Blogs</a></li>
                        @if(isset($categorypage))
                        <li class="breadcrumb-item active" aria-current="page">{{ $categorypage->name }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area sec_pad bg-disable">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    

                        @foreach($blogs as $r)
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog_grid_post shadow-sm wow fadeInUp">
                           
                            <div class="grid_post_content">
                                <div class="post_tag">


                                    @if(DB::table('wphj_term_relationships')->where('object_id' , $r->id)->count() > 0)

                                      @foreach(DB::table('wphj_term_relationships')->where('object_id' , $r->id)->get() as $c)
                                      @if(DB::table('blogcategories')->where('id' , $c->term_taxonomy_id)->count() > 0)
                                      <a class="cat-woocommerce" href="{{ url('') }}/{{ DB::table('blogcategories')->where('id' , $c->term_taxonomy_id)->get()->first()->slug }}">  <i class="icon_tag_alt"></i> {{DB::table('blogcategories')->where('id' , $c->term_taxonomy_id)->get()->first()->name}} </a>

                                         @endif
                                     @endforeach
                                     @endif

                                    




                                </div>
                                <a href="{{ url('') }}/{{ $r->url }}">
                                    <h4 class="b_title">{!! Str::limit($r->name) !!}</h4>
                                </a>
                                <div class="media post_author">
                                    <div class="round_img">
                                        <img src="img/blog-grid/author_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                    
                    <div class="col-lg-12">
                        {!! $blogs->links('frontend.newpagination') !!}
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_sidebar pl-40">
                    <div class="widget search_widget">
                        <div class="icon-input-group right-icon">
                            <input class="form-control" type="text" placeholder="Search">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                    <div class="widget categorie_widget">
                        <h4 class="c_head">Post Categories</h4>
                        <ul class="list-unstyled categorie_list">
                            <li><a href="#">Creative <span>(12)</span></a></li>
                            <li><a href="#">Inspiration <span>(8)</span></a></li>
                            <li><a href="#">Lifestyle <span>(3)</span></a></li>
                            <li><a href="#">News <span>(4)</span></a></li>
                            <li><a href="#">Photography <span>(12)</span></a></li>
                            <li><a href="#">Skill <span>(15)</span></a></li>
                            <li><a href="#">Tourist Tours <span>(10)</span></a></li>
                            <li><a href="#">Inspire <span>(5)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget recent_news_widget">
                        <h4 class="c_head">Reacent News</h4>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_01.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>Is It Worth Buying A Premium Form Builder.</h5>
                                </a>
                                <div class="entry_post_date">January 14, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_02.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>10 Classic Summer Vacations</h5>
                                </a>
                                <div class="entry_post_date">April 16, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_03.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>How To Easily Add weForms Widget Using Elementor</h5>
                                </a>
                                <div class="entry_post_date">March 10, 2020</div>
                            </div>
                        </div>
                        <div class="media recent_post_item">
                            <img src="img/blog-single/news_04.jpg" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h5>How to Create GDPR Consent Form In WordPress</h5>
                                </a>
                                <div class="entry_post_date">January 19, 2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Apps</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Foram</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">DocAll</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Docs</a></li>
                        </ul>
                    </div>
                    <div class="widget instragram_widget">
                        <h4 class="c_head">Instragram</h4>
                        <div class="instragram_info">
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_01.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_02.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_03.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_04.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_05.jpg" alt="">
                            </a>
                            <a href="#" class="instragram_item">
                                <img src="img/blog-single/image_06.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Blog-Page========== -->
    <!-- ==========Blog-Page========== -->
<script type="text/javascript">
    function submitbutton()
    {
        var mainurl = '{{ url('') }}';
        var email = $('#email').val();
        if(email == '')
        {
            $('.error').html('Email is Required');
        }else{
        $('.error').hide();
        $('#newsleetter').submit();
         $.ajax({
            type: "GET",
            url: mainurl+'/addemailfornewsletter/'+email,
            success: function(resp) {
                if(resp == 'success')
                {
                    $('.error').show();
                    $('.error').html('Subscribed Successfully');
                    $('.error').css('color' , 'green');
                }else{
                    $('.error').show();
                    $('.error').html('This Email is Already Subscribed');
                    $('.error').css('color' , 'red');
                }
            }
        });
     }

    }
    function loadmore()
    {
        var mainurl = '{{ url('') }}';
        var loadmorepage = $('#loadmorepage').val();
        $('#loadmorebutton').html('<i class="fa fa-spinner fa-spin"></i>');
        $.ajax({
            type: "GET",
            url: mainurl+'/loadmorepage/'+loadmorepage,
            success: function(resp) {

                $('#loadmorepagedata').append(resp);
                $('#loadmorebutton').html('Load More');

                $('#loadmorepage').val(parseInt(loadmorepage)+parseInt(10))

            }
        });
    }
</script>
@endsection
