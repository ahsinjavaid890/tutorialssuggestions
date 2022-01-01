@foreach($answerquestionsview as $r)
@php
    $user = $r->question_auther;
@endphp
<div class="single-forum-post-widget wow fadeInUp">
    <div class="post-content">
        <div class="post-title">
            <h6><a href="{{ url('question') }}/{{ $r->question_url }}">{!! Str::limit($r->question_name) !!}</a>
                <span><i class="icon_check_alt2"></i></span>
            </h6>
        </div>
        <div class="post-info">
            @if(Auth::check())

               @if(Auth::user()->username == $r->question_auther)
               <div style="text-align: left;">
                   Waiting for answers
               </div>
               @else
                <div class="author">
                    <a href="{{ url('addanswer') }}/{{ $r->question_url }}">Be the first to answer</a>
                </div>
               @endif

           @else

                <div class="author">
                    <a href="{{ url('addanswer') }}/{{ $r->question_url }}">Be the first to answer</a>
                </div>

           @endif

            

            <div class="post-time">
                <img src="{{ asset('/front/img/time-outline.svg')}}" alt="">{{ Cmf::create_time_ago($r->created_at) }}
            </div>
            <div class="post-category">
                <a href="#">
                    <img src="{{ asset('/front/img/home_three/forum-catagory-02.svg')}}" alt="">Announcements
                </a>
            </div>
        </div>
        <div class="post-tags">
            <div class="single-tag tag-php">{{ $r->question_subject }}</div>
        </div>
    </div>
    <div class="post-reach">
        <div class="post-view">
            <img src="{{ asset('/front/img/forum/eye-outline.svg')}}" alt="icon">{{ $r->no_of_views }} Views
        </div>
        <div class="post-like">
            <img src="{{ asset('/front/img/forum/thumbs-up-outline.svg')}}" alt="icon">250 Likes
        </div>
        <div class="post-comment">
            <img src="{{ asset('/front/img/forum/chatbubbles-outline.svg')}}" alt="icon">155 Replies
        </div>
    </div>
</div>

@endforeach