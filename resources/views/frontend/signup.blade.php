@extends('layouts.app')
@section('title')
<title>Sign Up</title>
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
                              <h2 class="text-white">Sign Up
                              </h2>
                          </div>
                      </div>
                  </div>
              </section>
               <section class="contact_area sec">
            <div class="container">

                <div style="max-width: 500px;" class="mx-auto">
                    <div class="card card-primary login-card1">
                        <h1 class="text heading">Sign up</h1>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <a href="#" class="social-button" id="facebook-connect"> <span>Facebook</span></a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <a href="#" class="social-button" id="google-connect"> <span class="google"> Google
                                </span></a>
                            </div>
                            <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Full Name</label>
                                <input type="name" value="@if(session()->has('name')){{ session()->get('name') }}  @endif" class="form-control" name="email" placeholder="Enter Name" required>
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label>Email</label>
                                <input type="email" value="@if(session()->has('email')){{ session()->get('email') }}  @endif" class="form-control" name="email" placeholder="Enter Email" required>
                                <i class="fa fa-envelope"></i>
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="row">
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <a  href="{{url('/login')}}">Already have an account?  </a>
                               
                            </div>
                            
                        <div class="row">
                            <div class="col-md-4">
                                 <div class="col-sm-6 col-md-6 col-lg-6 rigest ">
                                <button type="submit" class="btn  btn-lg btn-shadow btn-sign">Signup</button>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-4">
                            <div class="col-sm-6 col-md-6 col-lg-6 rigest ">
                                <a href="#" class="rigest" >Rigester Now</a>
                            </div>
                        </div>
                        </div>
                    </div>

                            </label>
                            @error('password')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                            
                            </div>
                        </form>
                         
                    </div>
                </div>
                    
            </div>
        </section>



@endsection