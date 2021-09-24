<section id="features" class="featured-services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2> Features </h2>
      <h3>Find Out More <span>About Us</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href=""> {!! isset($feature->title) ? $feature->title : '-' !!} </a></h4>
          <p class="description"> {!! isset($feature->content_1_description) ? $feature->content_1_description : '-' !!}</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href=""> {!! isset($feature->content_2_title) ? $feature->content_2_title : '-' !!} </a></h4>
          <p class="description"> {!! isset($feature->content_2_description) ? $feature->content_2_description : '-' !!} </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href=""> {!! isset($feature->content_3_title) ? $feature->content_3_title : '-' !!} </a></h4>
          <p class="description"> {!! isset($feature->content_3_description) ? $feature->content_3_description : '-' !!}</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href=""> {!! isset($feature->content_4_title) ? $feature->content_4_title : '-' !!} </a></h4>
          <p class="description"> {!! isset($feature->content_4_description) ? $feature->content_4_description : '-' !!}</p>
        </div>
      </div>

    </div>

  </div>
</section>
