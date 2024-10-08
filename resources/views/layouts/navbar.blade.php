
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soccer &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../resources/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../resources/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../resources/css/jquery-ui.css">
  <link rel="stylesheet" href="../resources/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../resources/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../reources/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../resources/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../resources/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../resources/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../resources/css/aos.css">

  <link rel="stylesheet" href="../resources/css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index">
              <img src="../resources/images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
               
 @if(session()->has('name'))
 @if (session('user_type')=='trainer')
 <li class="@yield('players')"><a href="{{route("pages.table")}}" class="nav-link" >Players</a></li>
 <li class="@yield('matches')"><a href="{{route('matches')}}" class="nav-link">Matches</a></li>
 <li><a href="{{route('pages.createMatch')}}" class="nav-link">Create Match</a></li>
 <li class="@yield('blog')"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
 <li class="@yield('contact')"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
 <li ><a href="signout" class="nav-link">SignOut</a></li>
 
 @else
 <li class="@yield('home')"><a href="{{route('index')}}" class="nav-link">Home</a></li>
 <li class="@yield('matches')"><a href="{{route('matches')}}" class="nav-link">Matches</a></li>
 <li class="@yield('players')"><a href="{{route("players")}}" class="nav-link">Players</a></li>
 <li class="@yield('blog')"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
 <li class="@yield('contact')"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
 <li class="@yield('player')"><a href="{{route("pages.player")}}" class="nav-link">Informations</a></li>
<li ><a href="signout" class="nav-link">SignOut</a></li>

 @endif




@else
<li class="@yield('home')"><a href="{{route('index')}}" class="nav-link">Home</a></li>
<li class="@yield('matches')"><a href="{{route('matches')}}" class="nav-link">Matches</a></li>
<li class="@yield('players')"><a href="{{route("players")}}" class="nav-link">Players</a></li>
<li class="@yield('blog')"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
<li class="@yield('contact')"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

<li class="@yield('signin')" ><a href="{{route('signin')}}" class="nav-link">@yield('login','SignIn')</a></li>


@endif
                <li class="@yield('signup')"><a href="{{route('signup')}}" class="nav-link" >SingUp</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>
    @yield('middle')

        
   


  @yield('container')


      <footer class="footer-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="widget mb-3">
                <h3>News</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">All</a></li>
                  <li><a href="#">Club News</a></li>
                  <li><a href="#">Media Center</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">RSS</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="widget mb-3">
                <h3>Tickets</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Online Ticket</a></li>
                  <li><a href="#">Payment and Prices</a></li>
                  <li><a href="#">Contact &amp; Booking</a></li>
                  <li><a href="#">Tickets</a></li>
                  <li><a href="#">Coupon</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="widget mb-3">
                <h3>Matches</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Standings</a></li>
                  <li><a href="#">World Cup</a></li>
                  <li><a href="#">La Lega</a></li>
                  <li><a href="#">Hyper Cup</a></li>
                  <li><a href="#">World League</a></li>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-3">
              <div class="widget mb-3">
                <h3>Social</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Youtube</a></li>
                </ul>
              </div>
            </div>
  
          </div>
  
          <div class="row text-center">
            <div class="col-md-12">
              <div class=" pt-5">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved | This template is made with <i class="icon-heart"
                    aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
            </div>
  
          </div>
        </div>
      </footer>
  
      <script src="../resources/js/jquery-3.3.1.min.js"></script>
      <script src="../resources/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="../resources/js/jquery-ui.js"></script>
      <script src="../resources/js/popper.min.js"></script>
      <script src="../resources/js/bootstrap.min.js"></script>
      <script src="../resources/js/owl.carousel.min.js"></script>
      <script src="../resources/js/jquery.stellar.min.js"></script>
      <script src="../resources/js/jquery.countdown.min.js"></script>
      <script src="../resources/js/bootstrap-datepicker.min.js"></script>
      <script src="../resources/js/jquery.easing.1.3.js"></script>
      <script src="../resources/js/aos.js"></script>
      <script src="../resources/js/jquery.fancybox.min.js"></script>
      <script src="../resources/js/jquery.sticky.js"></script>
      <script src="../resources/js/jquery.mb.YTPlayer.min.js"></script>
    
    
      <script src="../resources/js/main.js"></script>
    
    </body>
    
  
  <style>
       
  </style>