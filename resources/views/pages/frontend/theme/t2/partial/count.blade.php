<section id="count" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="icofont-simple-smile"></i>
          <span data-toggle="counter-up"> @if (!empty($count->count_1)) {{ $count->count_1 }} @endif </span>
          <p> @if (!empty($count->count_1_name)) {{ $count->count_1_name }} @endif </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="icofont-document-folder"></i>
          <span data-toggle="counter-up"> @if (!empty($count->count_2)) {{ $count->count_2 }} @endif </span>
          <p> @if (!empty($count->count_2_name)) {{ $count->count_2_name }} @endif </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-live-support"></i>
          <span data-toggle="counter-up"> @if (!empty($count->count_3)) {{ $count->count_3 }} @endif </span>
          <p> @if (!empty($count->count_3_name)) {{ $count->count_3_name }} @endif </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="icofont-users-alt-5"></i>
          <span data-toggle="counter-up"> @if (!empty($count->count_4)) {{ $count->count_4 }} @endif </span>
          <p> @if (!empty($count->count_4_name)) {{ $count->count_4_name }} @endif </p>
        </div>
      </div>

    </div>

  </div>
</section>
