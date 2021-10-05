<section id="testimonial" class="testimonials">
  <div class="container" data-aos="zoom-in">
    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-item text-muted">
        
      </div>

      @foreach($testimonial as $testimonial)
      <div class="testimonial-item">
        <img src="{!! $testimonial->description !!}" class="testimonial-img" alt="">
        <h3> {{ $testimonial->name }} </h3>
        <h4> {{ $testimonial->position }} </h4>
        <p>
          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
          {!! $testimonial->description !!}
          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
      </div>
      @endforeach
    </div>
  </div>
</section>
