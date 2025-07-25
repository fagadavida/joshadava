<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title> Josh Adava Limited </title>
    <link rel="stylesheet" href="/assets/css/navb.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fonts -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="assets/css/main1.css">
        <link rel="stylesheet" href="assets/css/carousel.css">
        <link rel="stylesheet" href="assets/css/contact.css"/>
        <link rel="stylesheet" href="assets/css/footer.css">
        <script src="assets/js/main1.js" defer></script>
        <script src="assets/js/carousel.js" defer></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="/">JOSHADAVA</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">JOSHADAVA LTD</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="/">HOME</a></li>
          {{-- <li>
            <a href="#">HTML & CSS</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Login Forms</a></li>
              <li><a href="#">Card Design</a></li>
              <li class="more">
                <span><a href="#">More</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="#">Neumorphism</a></li>
                  <li><a href="#">Pre-loader</a></li>
                  <li><a href="#">Glassmorphism</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}
          <li>
            <a href="#">SERVICES</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="#">Electrical Construction</a></li>
              <li><a href="#">Ac installation</a></li>
              <li><a href="#">Inverter installation</a></li>
              <li><a href="#">CCTV installation</a></li>
              <li><a href="#">Inverter & panels accessories</a></li>
              <li><a href="#">Electric fence</a></li>
              <li><a href="#">General contractor</a></li>
            </ul>
          </li>
          <li><a href="{{ route('about')}}">ABOUT US</a></li>
          <li><a href="{{ route('contact')}}">CONTACT US</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
  </nav>
  <main role="main" style="display:flex;flex:6; flex-direction:column">
    @yield('content')
</main>
<footer class='footer-container' style="margin-top: 50px">

    <div class="footer-row">
      <div class="footer-column">
        <h3>Customer Service</h3>
        <a href='/login'>MY ACCOUNT</a>
      </div>
      <div class="footer-column">
        <h3>Company</h3>
        <a href='/about'>OUR STORY</a>
      </div>
      <div class="footer-column">
      <a href="/privacy-policy"><h3>Privacy </h3></a>
      <a href='/login'>WEBSITE TERMS OF USE</a>
      </div>
      <div class="footer-column">
        <h4>
        Be the first to know about exclusive offers, new products, recipes and more!
        </h4>
        <input type="text" placeholder='Enter your email address' name='email'/>
        <button type="submit"  >
              Send message <i class="fa fa-paper-plane-o" style="font-size:18px;color:white"></i>
              </button>
      </div>
    </div>
    <div class="row">
      <img src="" alt="" />
    </div>
     <hr style="width:100%;margin:20px 0"/>

    <div class="row" style="align-items:center; justify-content:space-between; width:90%">
     <p class="PP">
        <a class="whatsapp"
          href="https://wa.me/+2348087970846"
          target="_blank"
          rel="noopener noreferrer"
          style="color:#5F6368; text-decoration:none"
        >
         <i class="fa fa-whatsapp" style="font-size:24px; background:#3399ff"></i>
        </a>
      </p>
      <a style="color:#FFF; text-decoration:none"
              target="_blank"
              href="https://web.facebook.com/Edutrique/"
            >
          <div class="SocialMedia" style="background:#3348AB">

          </div>
          </a>
          <a style="color:#FFF; text-decoration:none"
              target="_blank"
              href="https://twitter.com/edutrique"
            ><div class="SocialMedia" style="background:#3399ff">
              <i class="fa fa-twitter-square" style="font-size:48px;color:red"></i>
              </div>
          </a>
          <a style="color:#FFF; text-decoration:none"
              target="_blank"
              href="https://www.instagram.com/edutrique2/?hl=en"
            ><div class="SocialMedia" style="background:#ff33d6">

              </div>
          </a>
          <a style="color:#FFF; text-decoration:none"
              target="_blank"
              href="https://www.linkedin.com/company/edutrique/"
            ><div class="SocialMedia" style="background:#49728c">

            </div>
          </a>

     <div class="row">
     <p>All right reserved @ by Topchoice Technologies Limited </p>
     <p>Designed, Host and Manage by TOPCHOICE TECHNOLOGIES COMPANY (+ 2348153033861 )</p>
        </div>
        </div>
        </footer>

        <script type="text/javascript">

            function initMap() {

              const myLatLng = { lat: 22.2734719, lng: 70.7512559 };

              const map = new google.maps.Map(document.getElementById("map"), {

                zoom: 5,

                center: myLatLng,

              });



              new google.maps.Marker({

                position: myLatLng,

                map,

                title: "Hello Rajkot!",

              });

            }


            window.initMap = initMap;

        </script>



        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  <script src="/assets/js/navb.js"></script>
</body>
</html>
