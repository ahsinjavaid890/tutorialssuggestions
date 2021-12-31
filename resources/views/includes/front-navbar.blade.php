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
                @if(Auth::check())
                <li class="nav-item dropdown submenu">
                    <a href="#">
                        @if(Auth::user()->profileimage)
                        <img class="profile-circle-img" alt="Malik Abubakar" src="https://image.shutterstock.com/image-vector/avatar-man-icon-profile-placeholder-260nw-1229862502.jpg" ezimgfmt="rs rscb4 src ng ngcb4">
                        @else
                        <img class="profile-circle-img" alt="Malik Abubakar" src="https://image.shutterstock.com/image-vector/avatar-man-icon-profile-placeholder-260nw-1229862502.jpg" ezimgfmt="rs rscb4 src ng ngcb4">
                        @endif
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-bs-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="{{url('/my-profile')}}" class="nav-link">My Profile</a></li>
                        <li class="nav-item"><a href="{{url('/user/profile-settings')}}" class="nav-link">Settings</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Sign Out</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <div class="right-nav">
                @if(!Auth::check())
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
