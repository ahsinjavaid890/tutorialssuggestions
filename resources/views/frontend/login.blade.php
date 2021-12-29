@extends('layouts.app')
@section('title')
<title>Login</title>
<meta name="DC.Title" content="Login">
<meta name="rating" content="general">
<meta name="description" content="Answerout Login">
<meta property="og:type" content="website">
<meta property="og:image" content="">
<meta property="og:title" content="Answerout Login">
<meta property="og:description" content="Login">
<meta property="og:site_name" content="Answerout">
<meta property="og:url" content="{{ url('') }}">
<meta property="og:locale" content="it_IT">
@endsection
@section('content')
           <section class="banner-area-9 pt-lg-100 pt-55 pb-100 "
                  style="background-image: url({{ asset('front/img/breadcrumb/banner-bg.png') }});">
                  <div class="container">
                      <div class="row pt-90">
                          <div class=" col-lg-9 doc_banner_content text-center mx-auto">
                              <h2 class="text-white">Sign in
                              </h2>
                          </div>
                      </div>
                  </div>
              </section>
               <section class="contact_area sec">
                  <div class="container">
                      <div style="max-width: 500px;" class="mx-auto">
                          <div class="card card-primary login-card">
                              <h1 class="text heading">Sign In</h1>
                              <div class="row">
                                  <div class="col-sm-6 col-md-6 col-lg-6">
                                      <a href="{{ url('auth/facebook') }}" class="social-button" id="facebook-connect"> <span>Facebook</span></a>
                                  </div>
                                  <div class="col-sm-6 col-md-6 col-lg-6">
                                      <a href="{{ url('auth/google') }}" class="social-button" id="google-connect"> <span class="google"> Google</span></a>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group">
                                      <label>Username or Email</label>
                                      <input type="text" class="form-control" name="">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group">
                                      <label>Pasword</label>
                                      <input type="text" class="form-control" name="">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6 col-md-6 col-lg-6 " id="Remem">
                                      <input type="checkbox" name="Remember Me"><span class="rem">Remember Me</span>
                                  </div>
                                  <div style="text-align: right;" class="col-sm-6 col-md-6 col-lg-6"  id="Remem">
                                      <a href="#"> Forgot Your Password?</a>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                          
                  </div>
              </section>



@endsection