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
