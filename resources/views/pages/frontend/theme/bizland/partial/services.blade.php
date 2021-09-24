<section id="services" class="services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <h3>Check our <span>Services</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    @if ($service->count() == 0) <center> Services not found ... </center>
    @elseif ($service->count() == 1)
    @foreach($service as $services)
    <div class="row">
      <div class="col-lg-4 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"></div>
      <div class="col-lg-4 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""> {{ $services->name }} </a></h4>
          <p> {{ $services->sub_title }} </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"></div>
    </div>
    @endforeach
    @elseif ($service->count() == 2)
    <div class="row">
      <div class="col-lg-3 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"></div>
      @foreach($service as $services)
      <div class="col-lg-3 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""> {{ $services->name }} </a></h4>
          <p> {{ $services->sub_title }} </p>
        </div>
      </div>
      @endforeach
      <div class="col-lg-3 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"></div>
    </div>
    @elseif ($service->count() == 3)
    <div class="row">
      @foreach($service as $services)
      <div class="col-lg-4 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""> {{ $services->name }} </a></h4>
          <p> {{ $services->sub_title }} </p>
        </div>
      </div>
      @endforeach
    </div>
    @else
    <div class="row">
      @foreach($service as $services)
      <div class="col-lg-3 col-md-12 align-items-stretch mb-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4><a href=""> {{ $services->name }} </a></h4>
          <p> {{ $services->sub_title }} </p>
        </div>
      </div>
      @endforeach
    </div>
    @endif

  </div>
</section>
