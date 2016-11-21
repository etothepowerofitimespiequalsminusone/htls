<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome to shop.dev</title>
     <meta charset="utf-8">
     <link rel="icon" href="{{ asset('site/images/favicon.ico') }}">
     <link rel="shortcut icon" href="{{ asset('site/images/favicon.ico') }}" />
     <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('site/css/font-awesome.css') }}">
     <link rel="stylesheet" href="{{ asset('site/css/touchTouch.css') }}">
     <link rel="stylesheet" href="{{ asset('site/css/form.css') }}">
     <link rel="stylesheet" href="{{ asset('site/css/more.css') }}">
     <script src="{{ asset('site/js/jquery.js') }}"></script>
     <script src="{{ asset('site/js/jquery-migrate-1.1.1.js') }}"></script>
     <script src="{{ asset('site/js/superfish.js') }}"></script>
     <script src="{{ asset('site/js/jquery.equalheights.js') }}"></script>
     <script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
     <script src="{{ asset('site/js/jquery.ui.totop.js') }}"></script>
     <script src="{{ asset('site/js/touchTouch.jquery.js') }}"></script>
    <script>
  
    
    $(document).ready(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
    });  
    
    $(function(){
        // Initialize the gallery
        $('.prod a.gal').touchTouch();
      });

    </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body  class="">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
   <div class="grid_12"> 
    <h1><a href="/"><img src="{{ asset('site/images/logo.png') }}" alt="Baltic Hotels"></a> </h1>
    <div class="menu_block">

     <nav  class="" >
      <ul class="sf-menu">
         <li><a href="/">Hotels</a></li>
         <li><a href="/cities">Cities</a></li>
         <li><a href="/booking">Booking</a></li>
         @if ( Auth::guest() )
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
         @else
            @if ( Auth::user()->isAdmin() )
                <li><a href="/admin">Admin</a></li>
            @endif
            <li><a href="/auth/logout">Logout</a></li>
         @endif
       </ul>
    </nav>
    
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        @if ( $message = Session::pull('message') )
            <p class="success_msg">{{{ $message }}}</p>
        @endif
        <div class="grid_12">
@yield('content')
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<br />
<div class="bottom_block">
    <div class="container_12">
      <div class="grid_10 prefix_1">
&nbsp;    
      </div>
    </div>
</div>


<footer>    
  <div class="container_12">
    <div class="grid_12">

      <div class="copy">
      Hotel Booking &copy; | Website Template  Designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>