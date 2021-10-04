<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a href="mailto:{{ isset($general->email) ? $general->email : '-' }}"> {{ isset($general->email) ? $general->email : '-' }} </a>
      <i class="icofont-phone"></i> {{ isset($general->phone) ? $general->phone : '-' }}
    </div>
    <div class="social-links">
      <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '-' }}" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '-' }}" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '-' }}" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
    </div>
  </div>
</div>
