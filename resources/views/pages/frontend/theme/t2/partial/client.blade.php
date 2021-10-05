<section id="clients" class="clients section-bg">
  <div class="container" data-aos="zoom-in">

    <div class="section-title">
      <h2> Clients </h2>
      <h3> Check Our <span> Clients </span></h3>
    </div>

    @if ( $client->count() == 0 ) <center> .......... </center>
    @else
    <div class="row">
      @foreach($client as $client)
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{ $client->image }}" class="img-fluid" alt="{{ $client->name }}" title="{{ $client->name }}">
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>
