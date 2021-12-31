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
                              @if(session()->has('error'))
                    <div style="text-align: center;color: red;" id="result">{{ session()->get('error') }}</div>
                @endif
                              <form action="{{ route('login') }}" method="POST" id="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" value="@if(session()->has('email')){{ session()->get('email') }}  @endif" class="form-control" name="email" placeholder="Enter Email" required>
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 ">
                              <input id="rememberme" type="checkbox" name=""> <label for="rememberme">Remember Me</label>
                            </div>
                            <div class="col-md-6  text-right">
                              <a href="{{url('forgot-password')}}" class="link-href"> <small>Forget Password?</small> </a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Login Now</button>
                        </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-md-12 text-center">
                        <p>Don't have an account ? <a href="{{url('signup')}}" class="link-href"> Signup</a></p>
                      </div>
                    </div>
                    
                    
                </form>
                          </div>
                      </div>
                          
                  </div>
              </section>



@endsection