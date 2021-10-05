<section id="about" class="about section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>About</h2>
    </div>
    @if (!empty($about->description))  {{ $about->description }}
    @else <center> .......... </center>
    @endif
  </div>
</section>
