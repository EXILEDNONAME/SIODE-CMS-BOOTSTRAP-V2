<footer id="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 footer-contact">
          <h3> {{ isset($general->name) ? $general->name : '-' }} </h3>
          <p>
            {{ isset($general->address) ? $general->address : '-' }} <br>
            <strong>Phone:</strong> {{ isset($general->phone) ? $general->phone : '-' }} <br>
            <strong>Email:</strong> {{ isset($general->email) ? $general->email : '-' }}<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4> Our Services </h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4> Our Social Networks </h4>
          <p> Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies </p>
          <div class="social-links mt-3">
            <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '#' }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '#' }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '#' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span> {{ isset($general->name) ? $general->name : '-' }} </span></strong> - All Rights Reserved
    </div>
    <div class="credits"> Designed by <a href="#"> XXX </a></div>
  </div>
</footer>
