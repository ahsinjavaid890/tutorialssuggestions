<nav class="navbar navbar-expand-lg  menu_one sticky-nav d-lg-block d-none">
    <div class="container">
        <a class="navbar-brand header_logo" href="{{ url('') }}">
            <img class="first_logo sticky_logo" src="{{ asset('front/img/logo.png') }}" srcset="img/logo-2x.png 2x" alt="logo">
            <img class="white_logo main_logo" src="{{ asset('front/img/logo-w.png') }}" srcset="img/logo-w2x.png 2x" alt="logo">
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ms-auto">
                <li class="nav-item active">
                    <a href="{{ url('') }}" class="nav-link dropdown-toggle">Home</a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{ url('blogs') }}" class="nav-link dropdown-toggle">Blogs</a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{ url('ask') }}" class="nav-link dropdown-toggle">Ask Question?</a>
                    
                </li>
            </ul>
            <div class="right-nav">
                @if(Auth::check() )
                <li class="user-profile">
                    <a href="#">
                        <img class="profile-circle-img" alt="{{ Auth::user()->name }}" src="@if(!empty(Auth::user()->profileimageupdated)) {{asset('/images/')}}/{{ Auth::user()->profileimage }} @else  {{ Auth::user()->profileimage }} @endif" />
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{url('/my-profile')}}">Profile</a>
                        </li>
                        <li>
                            <a href="{{url('/user/profile-settings')}}">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item"  href="{{ route('logout') }}">Sign out</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </li>
                <li class="nav-item dropdown submenu">
                    <a href="#">
                        @if(Auth::user()->profileimage)
                        <img class="profile-circle-img" alt="Malik Abubakar" src="@if(!empty(Auth::user()->profileimageupdated)) {{asset('/images/')}}/{{ Auth::user()->profileimage }} @else  {{ Auth::user()->profileimage }} @endif" ezimgfmt="rs rscb4 src ng ngcb4">
                        @else
                        <img class="profile-circle-img" alt="Malik Abubakar" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXk5ueutLeqsbTn6eqpr7PJzc/j5ebf4eLZ3N2wtrnBxsjN0NLGysy6v8HT1tissra8wMNxTKO9AAAFDklEQVR4nO2d3XqDIAxAlfivoO//tEOZWzvbVTEpic252W3PF0gAIcsyRVEURVEURVEURVEURVEURVEURVEURVEURVEURflgAFL/AirAqzXO9R7XNBVcy9TbuMHmxjN6lr92cNVVLKEurVfK/zCORVvW8iUBnC02dj+Wpu0z0Y6QlaN5phcwZqjkOkK5HZyPAjkIjSO4fIdfcOwFKkJlX4zPu7Ha1tIcwR3wWxyFhRG6g4Je0YpSPDJCV8a2Sv2zd1O1x/2WMDZCwljH+clRrHfWCLGK8REMiql//2si5+DKWKcWeAGcFMzzNrXC/0TUwQ2s6+LhlcwjTMlYsUIQzPOCb7YBiyHopyLXIEKPEkI/TgeuiidK/R9FniUDOjRDpvm0RhqjMyyXNjDhCfIMYl1gGjIMIuYsnGEYRMRZOMMunaLVwpWRW008v6fYKDIzxCwVAeNSO90BJW6emelYBRF/kHpYGVaoxTDAaxOFsfP9y8hpJ4xd7gOcij7JNGQ1EYFgkPJa1jQEiYZXRaRINKxSDUW9n+FT82lSKadkiru9/4XPqSLWOekGPoY05TAvLm9orm+YWuwHoBHkZKijNBJGmeb61eL6Ff/6q7bLr7yvv3vKGhpDRjvgjGaPz+gUg6YgcvpyAR2FIZ9U6nEEyZRTovmEU32KichpGn7C17XrfyH9gK/c0CMP05HZIM2uf9sEveizKveBy9/6Qt7o89ne33D525cfcIMW6ab+TMEukQbQbu+xu7X3A9bChmWaCeAkG17bpntwXgWxHaMzGPmUaR5dQZiKqRVeUZ3047fi3nAu28h4CHxCsZAgmEH8Y27jJAhm8c+5RQzRQNVGhVFSfxOYIjp/pP7RxzjevYXVGf4eLt+BJ1vCuLuLkrgABgCGXZ2wik5uty+oBvNirI6mkzhAf4Gsb58Hcm67Jzd+KwD10BYPLL3e0MjvKrgAULnOfveF/O4N2Xb9BZom3gJes3F9X5Zze8/6Yt09b4CrqsEjUv8oFBaR2rl+6CZr2xVrp24o/WitBKuGrrpl1+bFkmK2qXTON4VpbdfLa7o7y/WdLxG7lm2Lqh2clOwTegbvc/vj2U78CwhA87Bn8G5Nk3eOb0Nsr9flz3sG78UUtue4kpv1xvjg3TMay62BMlTlP+vrOMnJsRmt/ze0jsfkPPYdAH57hK+34PeOyc8XIXu5xT2HsUkdZz+adwg8HGFfQ3K5jtDvbUiO4Di9/ywHGrL88pDizZ++oTp+an+SMX/ndymUCwmHMdO7yuOx83pUx/eEMU0AvxWndwgidAqOZ8ypCwdEfvvEo6D9HwpA8wzvmOJEqAg9ySu8g4x0Hb9hSB/BANEKJ+LbPBU0lzbAJs4xt1AoshKkUGQmiH8/jJ0gdhTTLmSegHlPE0oOdXALnqDjKYh3px//fSgSWG8UqfrrIICzYYSJXRr9BSPbpNzw7gBjKjKOYI7ReIGqQRIap5+5MdjyvuDkExvGeXSlONWZAP3/AZBwJohU7QJRGU+cTVH18ELmRPNBmibW6MT/k1b0XhdkRBvyT6SB6EYv/GvhSmRNpGngRULsAlxMCGNXp7w3FfdEbTEEDdLI9TdIKRUzUesa3I461ER8cpNT7gMRhpKmYVS9ELOgCUQsa4SsulciKiLbY+AnHD8cpuhISsnxpamI84sbDq9qYJgf8wiiOBrC7Ml7M7ZECCqKoiiKoiiKoiiKoijv5AvJxlZRyNWWLwAAAABJRU5ErkJggg==" ezimgfmt="rs rscb4 src ng ngcb4">
                        @endif
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="{{url('/my-profile')}}" class="nav-link">My Profile</a></li>
                        <li class="nav-item"><a href="{{url('/user/profile-settings')}}" class="nav-link">Settings</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Sign Out</a></li>
                    </ul>
                </li>
                @else
                <a class="signin-btn nav_btn" href="{{ url('signin') }}">Sign In</a>
                <a class="signup-btn nav_btn" href="{{ url('signup') }}">Sign Up</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<script type="text/javascript">
    function clickonsearchnavbar()
    {
        var value = $('.main-search-navbar').val();
        if(value == '')
        {
            $('.main-search-navbar').focus();
        }else{
            var mainurl = '{{ url('search') }}';
            var value = $('.main-search-navbar').val();
            location.replace(mainurl+'/'+value);
        }
    }
    $( document ).ready(function() {
        getnotification();
    });
    function getnotification()
    {
        setTimeout(function(){
            sendajaxcall();
        }, 5000);
    }
    function sendajaxcall()
    {
        var mainurl = '{{ url('') }}';
        var id = 1;
        $.ajax({
            type: "GET",
            url: mainurl+'/getnotification/'+id,
            success: function(resp) {
                if(resp > 0)
                {
                    $('#hidenotification').hide();
                    $('#shownotification').show();
                    $('#showncount').html(resp);
                }
            getnotification();
            }
        });
    }
</script>

<script type="text/javascript">
    function searchnavbar()
    {
        var mainurl = '{{ url('') }}';

        var value = $('.search-input').val();

        if(value == '')
        {
            $('#livesearch').hide();
        }else{
            $.ajax({
                type: "GET",
                url: mainurl+'/searchnavbar/'+value,
                success: function(resp) {
                    $('#livesearch').show();
                    $('#livesearch').html(resp);
                }
            });
        }
    }
    $(document).on('keypress',function(e) {
        if(e.which == 13) {
           var mainurl = '{{ url('search') }}';

       if($('.search-input').val() == '')
       {
            var value = $('.mobile-search-navbar').val();
        }else{
            var value = $('.search-input').val();
        }
        location.replace(mainurl+'/'+value);
        }
    });
    </script>
