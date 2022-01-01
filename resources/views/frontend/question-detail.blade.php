@extends('layouts.app')
@section('title')
<title>{{$data->metta_tittle}}</title>
<meta name="DC.Title" content="{{$data->metta_tittle}}">
<meta name="rating" content="general">
<meta name="description" content="{{$data->metta_description}}">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="{{$data->metta_tittle}}">
<meta property="og:description" content="{{$data->metta_description}}">
<meta property="og:site_name" content="Answerout">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:locale" content="it_IT">
@include('frontend.googlevoicescript')
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
    "name": "{{ $data->question_name }}"
  }]
}
</script>
@endsection
@section('content')
@include('frontend.questiondetail.questionpageextension')
@include('admin.alert')
<section class="banner-area-7  has_search">
</section>
<section class="page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        <li class="breadcrumb-item active"  aria-current="page">{{ $data->question_name, 130 }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on {{ Cmf::create_time_ago($data->updated_at) }}</a>
            </div>
        </div>
    </div>
</section>
<!--================End Forum Breadcrumb Area =================-->

<section class="doc_blog_grid_area sec_pad forum-single-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Forum post top area -->
                <div class="question1">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="forum-post-top">
                            @php
                                $userquestion = $data->question_auther;
                            @endphp
                            <a class="author-avatar" href="#">
                                <img src="img/forum/author-avatar.png" alt="">
                            </a>
                            <div class="forum-post-author">
                                <a style="text-transform: capitalize;" class="author-name" href="{{url('user-profile')}}/{{ $data->question_auther }}">  {{$userquestion}}
                                             </a>
                                <div class="forum-author-meta">
                                    <div class="author-badge">
                                        <i class="icon_calendar"></i>
                                        <a href="#">{{ Cmf::create_time_ago($data->created_at) }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Auth::check())
                    <div class="col-lg-3 col-md-4">
                        <div class="action-button-container">
                            <a href="{{ url('ask') }}" class="action_btn btn-ans ask-btn">Ask Question</a>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Forum post content -->
                
                <div class="q-title">
                    <span class="question-icon" title="Question">Q:</span>
                    <h1>{{ $data->question_name }}</h1>
                </div>
                <div class="forum-post-content">
                    <div class="content">
                        {!! $data->question_content !!}
                        @if(!empty(Cmf::get_image_name('questionimages' , 'questionid' , $data->id)))
                        <div class="preview">
                            <div class="preview-pic tab-content">
                                @foreach (Cmf::get_image_name('questionimages' , 'questionid' , $data->id) as $i)

                                <?php if(file_exists( asset('/images').'/'.$i->image_name )){ ?>

                                <div class="tab-pane @if ($loop->first) active  @endif" id="slide{{ $loop->iteration }}"><img style="height: 500px; background-color:transparent !important " class="slide-img"  src="{{ asset('/images') }}/{{ $i->image_name }}" /></div>

                                <?php }  ?>

                                @endforeach
                            </div>
                            @if(Cmf::get_image_name('questionimages' , 'questionid' , $data->id)->count() > 1)
                            <ul class="preview-thumbnail nav nav-tabs">
                                @foreach (Cmf::get_image_name('questionimages' , 'questionid' , $data->id) as $i)
                                <?php if(file_exists( asset('/images').'/'.$i->image_name )){ ?>
                                <li style="margin-bottom: 10px;cursor: pointer;" class="active"><a data-target="#slide{{ $loop->iteration }}" data-toggle="tab"><img style="height: 150px;" class="img-thumb" src="{{asset('/images')}}/{{ $i->image_name }}" /></a></li>
                                <?php }  ?>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        @endif
                    </div>
                    
                </div>
                </div>
                <?php $i = 0; ?>
                @foreach($answers as $r)
                <?php $i++; ?>
                @php
                    $user = $r->users;
                @endphp
                <!-- Best answer -->
                <div class="best-answer">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                <a class="author-avatar" href="#">
                                    <img src="img/forum/author-avatar.png" alt="">
                                </a>
                                <div class="forum-post-author">
                                  <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            <a href="#">{{ Cmf::create_time_ago($r->created_at) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- <p class="accepted-ans-mark">
                                <i class="icon_check"></i> <span>Accepted Solution</span>
                            </p> -->
                        </div>
                    </div>
                    <div class="best-ans-content d-flex">
                        <span class="question-icon" title="The Best Answer">A{{ $i }}:</span>
                        <p>
                            {!! nl2br($r->answer) !!}
                        </p>
                        @if(!empty(Cmf::get_image_name('answerimages' , 'answerid' , $r->id)))
                        <div class="preview">
                            <div class="preview-pic tab-content">
                                @foreach (Cmf::get_image_name('answerimages' , 'answerid' , $r->id) as $i)
                                <div class="tab-pane @if ($loop->first) active  @endif" id="slide{{ $loop->iteration }}"><img style="height: 500px; background-color:transparent !important" class="slide-img"  src="{{ asset('/images') }}/{{ $i->image_name }}" /></div>
                                @endforeach
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                @foreach (Cmf::get_image_name('answerimages' , 'answerid' , $r->id) as $i)
                                <li style="margin-bottom: 10px;cursor: pointer;" class="active"><a data-target="#slide{{ $loop->iteration }}" data-toggle="tab"><img style="height: 150px;" class="img-thumb" src="{{asset('/images')}}/{{ $i->image_name }}" /></a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>

                @endforeach
                <div class="row mt-2 mb-2">
                    {!! $answers->links('frontend.newpagination') !!}
                </div>
            </div>
            <!-- /.col-lg-8 -->

            <div class="col-lg-3">
                <div class="forum_sidebar">
                    <div class="widget usefull_links_widget">
                        <h4 class="c_head">Usefull Links</h4>

                        <ul class="list-unstyled usefull-links">
                            <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                            <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                            <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                            <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                        </ul>
                    </div>
                    <div class="widget ticket_widget">
                        <h4 class="c_head">Ticket Categories</h4>

                        <ul class="list-unstyled ticket_categories">
                            <li><img src="img/home_support/cmm5.png" alt="category">
                                <a href="#">Docs WordPress Theme</a> <span class="count">10</span>
                            </li>
                            <li><img src="img/home_support/cmm4.png" alt="category">
                                <a href="#">Product Landing</a>
                                <span class="count count-fill">13</span>
                                <span class="count">54</span>
                            </li>
                            <li><img src="img/home_support/cmm2.png" alt="category">
                                <a href="#">Knowledge Base</a><span class="count">142</span>
                            </li>
                            <li><img src="img/home_support/cmm8.png" alt="category">
                                <a href="#">Startup and App</a> <span class="count">13</span>
                            </li>
                            <li><img src="img/home_support/cmm9.png" alt="category">
                                <a href="#">Clean Email Template</a> <span class="count">123</span>
                            </li>
                            <li><img src="img/home_support/cmm10.png" alt="category">
                                <a href="#">Apps WordPress Theme</a> <span class="count">18</span>
                            </li>
                        </ul>
                    </div>

                    <div class="widget tag_widget">
                        <h4 class="c_head">Tags</h4>
                        <ul class="list-unstyled w_tag_list style-light">
                            <li><a href="#">Swagger</a></li>
                            <li><a href="#">Foram</a></li>
                            <li><a href="#">weCare</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Download</a></li>
                            <li><a href="#">Doc</a></li>
                            <li><a href="#">WordPress</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">ui/ux</a></li>
                            <li><a href="#">Doc Design</a></li>
                            <li><a href="#">DocAll</a></li>
                            <li><a href="#">Productboard</a></li>
                            <li><a href="#">Magento</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</section>

<div class="call-to-action">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="action-content-wrapper">
            <div class="action-title-wrap title-img">
                <img src="img/home_support/chat-smile.png" alt="">
                <h2 class="action-title">New to Communities?</h2>
            </div>
            <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
        </div>
        <!-- /.action-content-wrapper -->
    </div>
    <!-- /.container -->
</div>
<!-- /.call-to-action -->
@endsection
