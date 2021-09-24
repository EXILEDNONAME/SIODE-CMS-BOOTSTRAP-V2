<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Team</h2>
      <h3>Our Hardworking <span>Team</span></h3>
      <p> We're smart, we're hard working, we're easy to talk to, and we're love a challenge.</p>
    </div>

    @if ($team->count() == 0 ) <center> Teams not found ... </center>
    @elseif ($team->count() == 1 )
    @foreach($team as $team)
    <div class="row">
      <div class="col-lg-4 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"></div>
      <div class="col-lg-4 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            @if (!empty($team->image)) <img src="{{ $team->image }}" class="img-fluid" alt="">
            @else <img src="{{ $team->photo }}" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="{{ $team->social_twitter }}"><i class="icofont-twitter"></i></a>
              <a href="{{ $team->social_facebook }}"><i class="icofont-facebook"></i></a>
              <a href="{{ $team->social_instagram }}"><i class="icofont-instagram"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="text-center"> {{ $team->name }} </h4>
            <span class="text-center"> {{ $team->position }} </span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"></div>
    </div>
    @endforeach
    @elseif ($team->count() == 2 )
    <div class="row">
      <div class="col-lg-3 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"></div>
      @foreach($team as $team)
      <div class="col-lg-3 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            @if (!empty($team->image)) <img src="{{ $team->image }}" class="img-fluid" alt="">
            @else <img src="{{ $team->photo }}" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="{{ $team->social_twitter }}"><i class="icofont-twitter"></i></a>
              <a href="{{ $team->social_facebook }}"><i class="icofont-facebook"></i></a>
              <a href="{{ $team->social_instagram }}"><i class="icofont-instagram"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="text-center"> {{ $team->name }} </h4>
            <span class="text-center"> {{ $team->position }} </span>
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-lg-3 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"></div>
    </div>
    @elseif ($team->count() == 3 )
    <div class="row">
      @foreach($team as $team)
      <div class="col-lg-4 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            @if (!empty($team->image)) <img src="{{ $team->image }}" class="img-fluid" alt="">
            @else <img src="{{ $team->photo }}" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="{{ $team->social_twitter }}"><i class="icofont-twitter"></i></a>
              <a href="{{ $team->social_facebook }}"><i class="icofont-facebook"></i></a>
              <a href="{{ $team->social_instagram }}"><i class="icofont-instagram"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="text-center"> {{ $team->name }} </h4>
            <span class="text-center"> {{ $team->position }} </span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @else
    <div class="row">
      @foreach($team as $team)
      <div class="col-lg-3 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="member-img">
            @if (!empty($team->image)) <img src="{{ $team->image }}" class="img-fluid" alt="">
            @else <img src="{{ $team->photo }}" class="img-fluid" alt="">
            @endif
            <div class="social">
              <a href="{{ $team->social_twitter }}"><i class="icofont-twitter"></i></a>
              <a href="{{ $team->social_facebook }}"><i class="icofont-facebook"></i></a>
              <a href="{{ $team->social_instagram }}"><i class="icofont-instagram"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4 class="text-center"> {{ $team->name }} </h4>
            <span class="text-center"> {{ $team->position }} </span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </div>

</div>
</section>
