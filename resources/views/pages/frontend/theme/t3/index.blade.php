<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> {{ isset($general->name) ? $general->name : '-' }} </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="/assets/frontend/t3/img/favicon.png" rel="icon">
  <link href="/assets/frontend/t3/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/assets/frontend/t3/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/frontend/t3/css/style.css" rel="stylesheet">
</head>

<body>

  @include('pages.frontend.theme.t3.includes.header')

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/assets/frontend/t3/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  <main id="main">

    @foreach($section_main as $section)

    @if ($section->url == 'about')
    @include('pages.frontend.theme.t3.partial.about')
    @endif

    @if ($section->url == 'count')
    @include('pages.frontend.theme.t3.partial.counts')
    @endif

    @if ($section->url == 'team')
    @include('pages.frontend.theme.t3.partial.team')
    @endif

    @if ($section->url == 'testimonial')
    @include('pages.frontend.theme.t3.partial.testimonials')
    @endif

    @if ($section->url == 'client')
    @include('pages.frontend.theme.t3.partial.client')
    @endif

    @if ($section->url == 'pricing')
    @include('pages.frontend.theme.t3.partial.pricing')
    @endif

    @if ($section->url == 'contact-us')
    @include('pages.frontend.theme.t3.partial.contact-us')
    @endif

    @if ($section->url == 'service')
    @include('pages.frontend.theme.t3.partial.services')
    @endif

    @endforeach

    <!-- @include('pages.frontend.theme.t3.partial.skill') -->
    <!-- @include('pages.frontend.theme.t3.partial.portfolio') -->
    <!-- @include('pages.frontend.theme.t3.partial.faq') -->
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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
            <h3> {{ isset($general->name) ? $general->name : '-' }} </h3>
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
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '#' }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '#' }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '#' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ isset($general->name) ? $general->name : '-' }} </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#"> XXX </a>
      </div>
    </div>
  </footer>

  @include('pages.frontend.theme.t3.includes.js')

</body>
</html>
