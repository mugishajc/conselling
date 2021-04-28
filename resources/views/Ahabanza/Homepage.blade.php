<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Conseloringsystem</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/ahabanza/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/ahabanza/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/ahabanza/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/ahabanza/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/ahabanza/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/ahabanza/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('Ahabanza/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <link href="{{asset('ahabanza/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <!-- ======= Header ======= -->
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{ url('/') }}"><span>Conselling system</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#about">Who are we</a></li>
           
          <li class="get-started"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li class="get-started"><a href="{{ route('registeruser') }}">{{ __('Register') }}</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">We are here for you, ready to assist you</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We have a team of great specialists or xperts in different fields </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('registerconselor') }}" class="btn-get-started scrollto">{{ __('Get started as Conselor') }}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('/ahabanza/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              We are a big team of experts in different academia
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Psychologist</li>
              <li><i class="ri-check-double-line"></i> Dentist</li>
              <li><i class="ri-check-double-line"></i> General Doctors</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Our vision is to be the leading tech entrepreneur who contribute alot to our contry by providing reliable ,fast,modern and resilient technologies that are accessible for all. Job creation and digitizing our africa continent is our first concern and our key priority is to improve our standard of living
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>How to fight against fear?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            calm down and never be angry for others 
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>How to drink water?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Just drink it bro !!!
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <!-- <div class="copyright">
            &copy; Copyright <strong>conseling system</strong>. All Rights Reserved
          </div>
           -->
          <div class="credits">
          
          Designed by Student project</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="{{ route('login') }}" class="scrollto">{{ __('Login') }}</a>
            <a href="{{ route('registerconselor') }}" class="scrollto">{{ __('Get started as Conselor') }}</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/Ahabanza/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/Ahabanza/assets/vendor/aos/aos.js')}}"></script>

  <script src="{{asset('/Ahabanza/assets/js/main.js')}}"></script>

</body>

</html>