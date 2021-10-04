<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> {{ isset($general->name) ? $general->name : '-' }} </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="/assets/frontend/t2/img/favicon.png" rel="icon">
  <link href="/assets/frontend/t2/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/assets/frontend/t2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/frontend/t2/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/frontend/t2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/frontend/t2/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/frontend/t2/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/frontend/t2/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/frontend/t2/css/style.css" rel="stylesheet">
</head>

<body>
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:{{ isset($general->email) ? $general->email : '-' }}"> {{ isset($general->email) ? $general->email : '-' }} </a>
        <i class="icofont-phone"></i> {{ isset($general->phone) ? $general->phone : '-' }}
      </div>
      <div class="social-links">
        <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '-' }}" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '-' }}" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '-' }}" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html"> {{ isset($general->name) ? $general->name : '-' }} <span>.</span></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>

          @foreach($section_menu as $section)
          @if ($section->url == 'about') <li><a href="#about"> About </a></li> @endif
          @if ($section->url == 'count') <li><a href="#counts"> Counts </a></li> @endif
          @if ($section->url == 'team') <li><a href="#team"> Team </a></li> @endif
          @if ($section->url == 'client') <li><a href="#clients"> Clients </a></li> @endif
          @if ($section->url == 'testimonial') <li><a href="#testimonials"> Testimonials </a></li> @endif
          @if ($section->url == 'service') <li><a href="#services">Services</a></li> @endif
          @if ($section->url == 'pricing') <li><a href="#pricing">Pricing</a></li> @endif
          @if ($section->url == 'feature') <li><a href="#features">Features</a></li> @endif
          @endforeach

        </ul>
      </nav>
    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> Welcome to <span> {{ isset($general->name) ? $general->name : '-' }} </span></h1>
      <h2> {{ isset($general->slogan) ? $general->slogan : '-' }} </h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto"> Get Started </a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section>

  <main id="main">
    @foreach($section_main as $section)

    @if ($section->url == 'about')
    @include('pages.frontend.theme.t2.partial.about')
    @endif

    @if ($section->url == 'count')
    @include('pages.frontend.theme.t2.partial.counts')
    @endif

    @if ($section->url == 'team')
    @include('pages.frontend.theme.t2.partial.team')
    @endif

    @if ($section->url == 'testimonial')
    @include('pages.frontend.theme.t2.partial.testimonials')
    @endif

    @if ($section->url == 'client')
    @include('pages.frontend.theme.t2.partial.clients')
    @endif

    @if ($section->url == 'pricing')
    @include('pages.frontend.theme.t2.partial.pricing')
    @endif

    @if ($section->url == 'contact-us')
    @include('pages.frontend.theme.t2.partial.contact-us')
    @endif

    @if ($section->url == 'service')
    @include('pages.frontend.theme.t2.partial.services')
    @endif

    @endforeach

    <!-- @include('pages.frontend.theme.t2.partial.skills') -->
    <!-- @include('pages.frontend.theme.t2.partial.portfolio') -->
    <!-- @include('pages.frontend.theme.t2.partial.faq') -->
    <!-- @include('pages.frontend.theme.t2.partial.features') -->
  </main>

  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p> Get the latest news & trends delivered to your inbox. </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3> {{ isset($general->name) ? $general->name : '-' }} <span>.</span></h3>
            <p>
              {{ isset($general->address) ? $general->address : '-' }} <br>
              <strong>Phone:</strong> {{ isset($general->phone) ? $general->phone : '-' }} <br>
              <strong>Email:</strong> {{ isset($general->email) ? $general->email : '-' }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Our Social Networks </h4>
            <p> Follow Us </p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '#' }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '#' }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '#' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ isset($general->name) ? $general->name : '-' }} </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#"> XXX </a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="whatsapp"><i class="icofont-simple-up"></i></a>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/frontend/t2/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/frontend/t2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/frontend/t2/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/frontend/t2/vendor/php-email-form/validate.js"></script>
  <script src="/assets/frontend/t2/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/frontend/t2/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/frontend/t2/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/frontend/t2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/frontend/t2/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/frontend/t2/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/frontend/t2/js/main.js"></script>

</body>

</html>
