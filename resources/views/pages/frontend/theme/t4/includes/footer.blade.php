<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 footer-contact">
          <h3> {{ isset($general->name) ? $general->name : '-' }} </h3>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Join Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">
    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span> {{ isset($general->name) ? $general->name : '-' }} </span></strong> - All Rights Reserved
      </div>
      <div class="credits"> Designed by <a href="#"> XXX </a></div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="https://twitter.com/{{ isset($general->social_twitter) ? $general->social_twitter : '#' }}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="https://www.facebook.com/{{ isset($general->social_facebook) ? $general->social_facebook : '#' }}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://www.instagram.com/{{ isset($general->social_instagram) ? $general->social_instagram : '#' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
    </div>
  </div>
</footer>
