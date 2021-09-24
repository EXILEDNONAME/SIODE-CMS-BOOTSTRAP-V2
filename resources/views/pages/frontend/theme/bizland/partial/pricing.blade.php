<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pricing</h2>
      <h3>Check our <span>Pricing</span></h3>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    @if ($pricing->count() == 0) <center> Pricing not found ... </center>
    @elseif ($pricing->count() == 1)
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200"></div>
      @foreach ($pricing as $pricing)
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box @if($pricing->default == 1 ) featured @else @endif">
          @if($pricing->premium == 1) <span class="advanced"> Premium </span> @else @endif
          <h3> {{ $pricing->name }} </h3>
          <h4><sup>Rp</sup>{{ $pricing->price }}<span> / {{ $pricing->unit }} </span></h4>
          {!! $pricing->description !!}
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200"></div>
    </div>
    @elseif ($pricing->count() == 2)
    <div class="row">
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200"></div>
      @foreach ($pricing as $pricing)
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box @if($pricing->default == 1 ) featured @else @endif">
          @if($pricing->premium == 1) <span class="advanced"> Premium </span> @else @endif
          <h3> {{ $pricing->name }} </h3>
          <h4><sup>Rp</sup>{{ $pricing->price }}<span> / {{ $pricing->unit }} </span></h4>
          {!! $pricing->description !!}
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200"></div>
    </div>
    @elseif ($pricing->count() == 3)
    <div class="row">
      @foreach ($pricing as $pricing)
      <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box @if($pricing->default == 1 ) featured @else @endif">
          @if($pricing->premium == 1) <span class="advanced"> Premium </span> @else @endif
          <h3> {{ $pricing->name }} </h3>
          <h4><sup>Rp</sup>{{ $pricing->price }}<span> / {{ $pricing->unit }} </span></h4>
          {!! $pricing->description !!}
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @else
    <div class="row">
      @foreach ($pricing as $pricing)
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="box @if($pricing->default == 1 ) featured @else @endif">
          @if($pricing->premium == 1) <span class="advanced"> Premium </span> @else @endif
          <h3> {{ $pricing->name }} </h3>
          <h4><sup>Rp</sup>{{ $pricing->price }}<span> / {{ $pricing->unit }} </span></h4>
          {!! $pricing->description !!}
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endif


  </div>
</section>
