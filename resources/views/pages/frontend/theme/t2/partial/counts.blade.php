<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="icofont-simple-smile"></i>
          <span data-toggle="counter-up">
            @if (!empty($count->context_1)) {{ $count->context_1 }}
            @else -
            @endif
          </span>
          <p>
            @if (!empty($count->context_1_title)) {{ $count->context_1_title }}
            @else -
            @endif
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="icofont-document-folder"></i>
          <span data-toggle="counter-up">
            @if (!empty($count->context_2)) {{ $count->context_2 }}
            @else -
            @endif
          </span>
          <p>
            @if (!empty($count->context_2_title)) {{ $count->context_2_title }}
            @else -
            @endif
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-live-support"></i>
          <span data-toggle="counter-up">
            @if (!empty($count->context_3)) {{ $count->context_3 }}
            @else -
            @endif
          </span>
          <p>
            @if (!empty($count->context_3_title)) {{ $count->context_3_title }}
            @else -
            @endif
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-users-alt-5"></i>
          <span data-toggle="counter-up">
            @if (!empty($count->context_4)) {{ $count->context_4 }}
            @else -
            @endif
          </span>
          <p>
            @if (!empty($count->context_4_title)) {{ $count->context_4_title }}
            @else -
            @endif
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
