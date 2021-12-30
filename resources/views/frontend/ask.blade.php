@extends('layouts.app')
@section('title')
<title>Ask Question</title>
<meta name="DC.Title" content="Ask Question">
<meta name="rating" content="general">
<meta name="description" content="Ask Question">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Ask Question">
<meta property="og:description" content="Ask Question">
<meta property="og:site_name" content="Ask Question">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
<link rel="stylesheet" href="{{ asset('/front/assets/summernote/summernote-bs4.css') }}">
<script src="{{ asset('/front/assets/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@section('content')
<!-- include libraries(jQuery, bootstrap) -->
<!-- include summernote css/js -->
<!-- <section class="profile-section single-community">
    <div class="container-fluid p-0">
        <div class="bg-new-question" style='background-image: url({{ asset("/front/assets/images/shahzad/ask-question-bg-2.png")}});'>
            <div class="row p-mb-4">
                <div class="col-md-6 offset-md-3">
                    <div class="mt-100"></div>
                    @include('admin.alert')
                    <div class="row mt-3 mb-4">
                        <div class="col-md-12">
                            <h1 class="f-20 ask-text">Ask your question and get your answers by experts.</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-ask">
                                <div class="card-body">
                                    <form id="askquestionformsubmit" enctype="multipart/form-data" method="POST" action="{{ url('createquestionuser') }}">
                                        {{ csrf_field() }}
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="text-black f-weight-500">Question Title</label>
                                                <input required="" type="text" class="form-control input-ask" placeholder="" name="question_name">
                                                <label class="text-black mt-2 f-weight-500">Write a detailed answer</label>
                                                <textarea id="summernote" name="question_content" placeholder="" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                                <p id="files-area">
                                                    <span id="filesList">
                                                        <span id="files-names"></span>
                                                    </span>
                                                </p>
                                                <div class="g-recaptcha"
                                                    data-sitekey="{{config('services.recaptcha.key')}}">
                                                </div>
                                                <div style="color:red;" id="captchaerror"></div>
                                            </div>
                                            <div class="col-md-3 text-right">
                                                <input accept="image/png, image/gif, image/jpeg"  multiple="" name="question_image[]" type="file" id="upload" hidden/>
                                                <label class="file-upload" for="upload" title="Upload photos (optional)"><small>Add Media</small> <img width="20px" src="{{asset('/front/assets/images/shahzad/camera.svg')}}"></label>
                                            </div>
                                        </div>


                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3 col-12 text-center">
                                    <p class="ask-text mt-1 pt-2"> <b>Subject -</b></p>
                                </div>
                                <div class="col-md-5 col-12 mb-2">
                                    <select name="question_subject" id="selec-color-dark" class="form-control subject-rounded input-lg" required="">
                                        <option value="">Select Subject</option>
                                        @foreach($categories as $r)
                                        <option value="{{ $r->name }}">{{ $r->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <button class="btn btn-white-mine btn-block p-3">Submit Now <img width="27px" src="{{asset('/front/assets/images/shahzad/arrow-circle.png')}}"> </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->
    <section class="banner-area-7 pt-20 pb-80 has_search">
      <div class="banner-shapes">
        <div class="shape">
          <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-1.png" alt="shape" />
        </div>
        <div class="shape">
          <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-2.png" alt="shape" />
        </div>
        <div class="shape">
          <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-3.png" alt="shape" />
        </div>
        <div class="shape">
          <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="img/add-question/banner-shape-4.png" alt="shape" />
        </div>
      </div>
      <div class="container">
        <div class="row pt-120 pb-30">
          <div class="
                col-lg-9
                doc_banner_content
                search-banner-light
                text-center
                mx-auto
                pt-20
              ">
            <h1 class="banner-title-h1 mb-4">Ask Questions</h1>
            <form action="#" class="header_search_form-5 mx-auto">
              <div class="header_search_form_info">
                <div class="form-group">
                  <div class="input-wrapper d-flex flex-row">
                    <input type="search" id="searchbox" autocomplete="off" name="search"
                      placeholder="Search for topics, posts, users or categories" />
                    <button type="submit"><i class="icon_search"></i></button>
                    <div class="header_search_form_panel">
                      <ul class="list-unstyled">
                        <li>
                          Help Desk
                          <ul class="list-unstyled search_item">
                            <li>
                              <span>Configuration</span><a href="#">How to edit host and port?</a>
                            </li>
                            <li>
                              <span>Configuration</span><a href="#">The dev Property</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          Support
                          <ul class="list-unstyled search_item">
                            <li>
                              <span>Pages</span><a href="#">The asyncData Method</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          Documentation
                          <ul class="list-unstyled search_item">
                            <li>
                              <span>Getting Started</span><a href="#">The asyncData Method</a>
                            </li>
                            <li>
                              <span>Getting Started</span><a href="#">The asyncData Method</a>
                            </li>
                            <li>
                              <span>Getting Started</span><a href="#">The asyncData Method</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="header_search_keyword search-white mt-3">
                <span class="header-search-form__keywords-label">Popular topics:</span>
                <ul class="list-unstyled">
                  <li class="wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#">Forums</a>,
                  </li>
                  <li></li>
                  <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <a href="#">Getting stated</a>,
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.3s">
                    <a href="#">Introduction</a>,
                  </li>
                  <li class="wow fadeInUp" data-wow-delay="0.4s">
                    <a href="#">Payment</a>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="page_breadcrumb bg-transparent">
      <div class="container custom_container">
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
    <section class="all-question-area bg-disable pt-100 pb-120 d-flex justify-content-center">
      <div class="container custom-container">
        <div class="row">
          <div class="col-xl-2 d-xl-block d-none pe-0">
            <div class="forum-left-sidebar-widget">
              <ul class="list-unstyled nav-sidebar">
                <li class="nav-item">
                  <a href="index.html" class="nav-link"><img src="img/side-nav/home.png" alt="">Home</a>
                </li>
                <li class="nav-item active">
                  <a href="forum-topics.html" class="nav-link"><img src="img/side-nav/question.png"
                      alt="briefcase">Questions</a>
                  <span class="icon"><i class="arrow_carrot-down"></i></span>
                  <ul class="list-unstyled dropdown_nav">
                    <li><a href="#">New Questions</a></li>
                    <li><a href="#" class="active">Trending Questions</a></li>
                    <li><a href="#">Must read Questions</a></li>
                    <li><a href="#">Hot Questions</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/link.png" alt="">Communities</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/megaphone.png" alt="">Polls</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/mortarboard.png" alt="">Education</a>
                  <span class="icon"><i class="arrow_carrot-down"></i></span>
                  <ul class="list-unstyled dropdown_nav">
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">Code</a></li>
                    <li><a href="#">Image</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Keyboard Shortcuts</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/robot.png" alt="">Technology</a>
                </li>
                <li class="nav-item">
                  <a href="badges.html" class="nav-link"><img src="img/side-nav/badge.png" alt="">Badges</a>
                </li>
                <li class="nav-item">
                  <a href="add-question.html" class="nav-link"><img src="img/side-nav/add.png" alt="">Add group</a>
                </li>
                <li class="nav-item">
                  <a href="user-list.html" class="nav-link"><img src="img/side-nav/chat.png" alt="">User</a>
                  <span class="icon"><i class="arrow_carrot-down"></i></span>
                  <ul class="list-unstyled dropdown_nav">
                    <li><a href="forum-profile.html">User Profile</a></li>
                    <li><a href="user-list.html">User List</a></li>
                    <li><a href="user-details.html">User Details</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/lifeguard.png" alt="">Help</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><img src="img/side-nav/bag.png" alt="">Buy Theme</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-7 pe-xl-0 ps-xxl-4">
            <div class="add-question-widget">
              <h4 class="widget-title">Create New Question</h4>
              <form action="#">
                <div class="mt-30">
                  <label class="label" for="inp_title">Title <span>*</span></label>
                  <div class="icon-input-group">
                    <input class="form-control" type="text" id="inp_title" />
                    <i class="icon_chat_alt"></i>
                  </div>
                  <div class="instruction">
                    Please choose an appropriate title for the equation so
                    it can be answered easily.
                  </div>
                </div>
                <div class="mt-25">
                  <label class="label" for="inp_category">Category <span>*</span></label>
                  <div class="icon-input-group">
                    <select id="inp_category" class="custom-select form-control">
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                    <i class="icon_folder-open"></i>
                  </div>
                  <div class="instruction">
                    Please choose an appropriate title for the equation so
                    it can be answered easily.
                  </div>
                </div>
                <div class="mt-25">
                  <label class="label" for="inp_tag">Tags <span>*</span></label>
                  <div class="icon-input-group">
                    <input class="form-control" type="text" id="inp_tag" />
                    <i class="icon_tags"></i>
                  </div>
                  <div class="instruction">
                    Please choose suitable Keywords Ex:
                    <span>question, poll</span>
                  </div>
                </div>

                <div class="mt-25">
                  <label class="label" for="inp_desc">Description <span>*</span></label>
                  <textarea id="inp_desc" cols="30" rows="7" class="form-control"></textarea>

                  <div class="instruction">
                    Please choose an appropriate title for the equation so
                    it can be answered easily.
                  </div>
                </div>
                <div class="mt-25">
                  <label class="label">Attach File <span>*</span></label>
                  <div id="dropzone" class="dropzone">

                  </div>

                  <ul class="dropzone-file-preview pt-3" id="dropzone-preview-container">
                    <li>
                      <div class="upload-progress" data-dz-uploadprogress></div>
                      <div class="preview-info">
                        <ion-icon name="attach"></ion-icon>
                        <span data-dz-name></span>
                      </div>
                      <button data-dz-remove>Remove</button>
                    </li>
                  </ul>
                  <div class="form-check mt-30">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                    <label class="form-check-label" for="disabledFieldsetCheck">
                      Is this question is a poll? If you want to be doing a poll click here.
                    </label>
                  </div>
                  <div class="form-check mt-10">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck2">
                    <label class="form-check-label" for="disabledFieldsetCheck2">
                      Get notified by email when someone answers this question.
                    </label>
                  </div>
                  <div class="form-check mt-10">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck3">
                    <label class="form-check-label" for="disabledFieldsetCheck3">
                      By asking your question, you agree to the Terms of Service and Privacy
                      Policy.
                    </label>
                  </div>

                  <div class="d-flex justify-content-between mt-60">

                    <button class="cancel_btn">Cancel</button>

                    <button class="action_btn" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="forum-right-sidebar-widget question-sidebar">
              <a href="#" class="action_btn custom-sidebar-btn w-100">Ask Question</a>
              <div class="single-widget-box stat-widget-2 mt-40">
                <div class="widget-header">
                  <img src="img/statistics-icon.png" alt="icon" />
                  <h5>Ama Statistics</h5>
                </div>
                <div class="widget-content">
                  <p>Q&A for serious players and enthusiasts of Ama</p>
                  <div class="row gx-0">
                    <div class="col-4">
                      <h4 class="counter">50</h4>
                      <span>Questions</span>
                    </div>
                    <div class="col-4">
                      <h4 class="counter">70</h4>
                      <span>Answers</span>
                    </div>
                    <div class="col-4">
                      <h4>
                        <span class="counter d-inline-block">99</span>%
                      </h4>
                      <span>Answersed</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="single-widget-box top-user mt-40">
                <div class="widget-header">
                  <img src="img/user-icon.png" alt="icon" />
                  <h5>Ama User</h5>
                </div>
                <div class="widget-content">
                  <div class="mb-4">
                    <select class="custom-select nav nav-tabs" id="nav-tab">
                      <option id="nav-daily-tab" data-bs-toggle="tab" data-bs-target="#nav-daily"
                        aria-controls="nav-daily" aria-selected="true" value="daily ranking">
                        daily ranking
                      </option>
                      <option id="nav-weekly-tab" data-bs-toggle="tab" data-bs-target="#nav-weekly"
                        aria-controls="nav-weekly" aria-selected="false" value="weekly ranking">
                        weekly ranking
                      </option>
                      <option id="nav-monthly-tab" data-bs-toggle="tab" data-bs-target="#nav-month"
                        aria-controls="nav-month" aria-selected="false" value="monthly ranking">
                        monthly ranking
                      </option>
                    </select>
                  </div>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-daily" role="tabpanel"
                      aria-labelledby="nav-daily-tab">
                      <ul class="list-unstyled user-list">
                        <li>
                          1
                          <img src="img/forum/top-user/user-1.png" alt="" /><a href="#">Craig
                            Levin</a><span>750
                            pts</span>
                        </li>
                        <li>
                          2
                          <img src="img/forum/top-user/user-2.png" alt="" /><a href="#">Kadin
                            George</a><span>690
                            pts</span>
                        </li>
                        <li>
                          3
                          <img src="img/forum/top-user/user-3.png" alt="" /><a href="#">Hanna
                            Rosser</a><span>650
                            pts</span>
                        </li>
                        <li>
                          4
                          <img src="img/forum/top-user/user-4.png" alt="" /><a href="#">Phillip Carder</a><span>500
                            pts</span>
                        </li>
                        <li>
                          5
                          <img src="img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                            Rhiel</a><span>425
                            pts</span>
                        </li>
                        <li>
                          6
                          <img src="img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                            Rhiel</a><span>399
                            pts</span>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-weekly" role="tabpanel" aria-labelledby="nav-weekly-tab">
                      <ul class="list-unstyled user-list">
                        <li>
                          1
                          <img src="img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                            Rhiel</a><span>399
                            pts</span>
                        </li>
                        <li>
                          2
                          <img src="img/forum/top-user/user-4.png" alt="" /><a href="#">Martin
                            Garrix</a><span>500
                            pts</span>
                        </li>
                        <li>
                          3
                          <img src="img/forum/top-user/user-2.png" alt="" /><a href="#">Avicii</a><span>690 pts</span>
                        </li>
                        <li>
                          4
                          <img src="img/forum/top-user/user-3.png" alt="" /><a href="#">Hanna
                            Rosser</a><span>650
                            pts</span>
                        </li>
                        <li>
                          5
                          <img src="img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                            Rhiel</a><span>425
                            pts</span>
                        </li>
                        <li>
                          6
                          <img src="img/forum/top-user/user-1.png" alt="" /><a href="#">Craig
                            Levin</a><span>750
                            pts</span>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-month" role="tabpanel" aria-labelledby="nav-monthly-tab">
                      <ul class="list-unstyled user-list">
                        <li>
                          1
                          <img src="img/forum/top-user/user-4.png" alt="" /><a href="#">Phillip Kappa</a><span>500
                            pts</span>
                        </li>
                        <li>
                          2
                          <img src="img/forum/top-user/user-6.png" alt="" /><a href="#">Marley
                            Rhiel</a><span>399
                            pts</span>
                        </li>
                        <li>
                          3
                          <img src="img/forum/top-user/user-3.png" alt="" /><a href="#">Tylor
                            Swift</a><span>650
                            pts</span>
                        </li>
                        <li>
                          4
                          <img src="img/forum/top-user/user-1.png" alt="" /><a href="#">Tony
                            Stark</a><span>750
                            pts</span>
                        </li>
                        <li>
                          5
                          <img src="img/forum/top-user/user-5.png" alt="" /><a href="#">Jaxson
                            Rhiel</a><span>425
                            pts</span>
                        </li>
                        <li>
                          6
                          <img src="img/forum/top-user/user-2.png" alt="" /><a href="#">Steve
                            Aoki</a><span>690
                            pts</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="single-widget-box related-topic mt-40">
                <div class="widget-header">
                  <img src="img/chain.png" alt="icon" />
                  <h5>Related</h5>
                </div>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    <li>
                      <span class="ans-count">78</span><a href="#">Loop inside React JSX</a>
                    </li>
                    <li>
                      <span class="ans-count">76</span><a href="#">Show or hide element in
                        React</a>
                    </li>
                    <li>
                      <span class="ans-count">69</span><a href="#">Hide keyboard in
                        react-native</a>
                    </li>
                    <li>
                      <span class="ans-count">56</span><a href="#">React Native version
                        mismatch</a>
                    </li>
                    <li>
                      <span class="ans-count">37</span><a href="#">Hide keyboard in
                        react-native</a>
                    </li>
                    <li>
                      <span class="ans-count">20</span><a href="#">Show or hide element in
                        React</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="single-widget-box tag-widget mt-40">
                <div class="widget-header">
                  <img src="img/tags-icon.png" alt="icon" />
                  <h5>Tags</h5>
                </div>
                <div class="widget-content">
                  <ul class="widget-tag-list-2 list-unstyled tag-light">
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">WordPress</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Foram</a></li>
                    <li><a href="#">help desk</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">support</a></li>
                    <li><a href="#">ecommerce</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<script type="text/javascript">

    $('#askquestionformsubmit').on('submit', function(e) {
      if(grecaptcha.getResponse() == "") {
        e.preventDefault();
        $('#captchaerror').html('Captcha Is Required');
      }
    });

    const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

        $("#upload").on('change', function(e){
            for(var i = 0; i < this.files.length; i++){
                let fileBloc = $('<span/>', {class: 'file-block'}),
                     fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
                fileBloc.append('<span class="file-delete"><span>+</span></span>')
                    .append(fileName);
                $("#filesList > #files-names").append(fileBloc);
            };
            // Ajout des fichiers dans l'objet DataTransfer
            for (let file of this.files) {
                dt.items.add(file);
            }
            // Mise à jour des fichiers de l'input file après ajout
            this.files = dt.files;

            // EventListener pour le bouton de suppression créé
            $('span.file-delete').click(function(){
                let name = $(this).next('span.name').text();
                // Supprimer l'affichage du nom de fichier
                $(this).parent().remove();
                for(let i = 0; i < dt.items.length; i++){
                    // Correspondance du fichier et du nom
                    if(name === dt.items[i].getAsFile().name){
                        // Suppression du fichier dans l'objet DataTransfer
                        dt.items.remove(i);
                        continue;
                    }
                }
                // Mise à jour des fichiers de l'input file après suppression
                document.getElementById('upload').files = dt.files;
            });
        });
</script>
@endsection
