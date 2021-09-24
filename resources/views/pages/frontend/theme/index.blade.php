<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <title>Rocket Coming Soon Page, made by land-of-web.com</title>
	    <link type="text/css" href="/assets/frontend/default/styles/reset.css" rel="stylesheet" media="all" />
	    <link type="text/css" href="/assets/frontend/default/styles/text.css" rel="stylesheet" media="all" />
	    <link type="text/css" href="/assets/frontend/default/styles/960.css" rel="stylesheet" media="all" />
	    <link type="text/css" href="/assets/frontend/default/styles/style.css" rel="stylesheet" media="all" />
		<link type="text/css" href="/assets/frontend/default/styles/jquery.countdown.css" rel="stylesheet" media="all" />

	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/frontend/default/script/jquery.countdown.js"></script>
		<script type="text/javascript">
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
});
</script>
	</head>

	<body>
	<!--Header-->
    <div class="header_cotainer">
	       <div class="container_12">
		   <div class="grid_5">
	          <p> WE GO LIVE IN</p>
	        </div>
			<!-- Timer -->
			<div class="grid_7"><div id="defaultCountdown"></div></div>

			</div>
	</div>
<!--Content-->
	    <div class="content_container container_12">
  <div class="container_12 content_bg">
  <div class="container_12 content_bg2">
  <!-- Top line-->
  <div class="grid_2 logo"><a href="http://www.land-of-web.com"><img src="/assets/frontend/default/images/logo.png" alt="Logo" align="center" /></a>
  <p class="slogan">COMPANY<p></div>
  <div class="grid_10"><img src="/assets/frontend/default/images/dottedline.png" alt="Logo" align="left" /></div>

  <div class="clear"></div>

  <!-- Text -->
  <div class="grid_7">
  <p>WE ARE CURRENTLY WORKING ON AN AWESOME NEW SITE.</p>
  <p style="color:#842606;">STAY TUNED!</p>
  <p>PLEASE DON'T FORGET TO CHECK OUT OUR TWEETS AND TO SUBSCRIBE TO OUR UPDATES</p></div>
  <div class="clear"></div>
  <!-- Subscription -->
  <div class="grid_7">
  <div id="contact-area">
    <form method="post" action="">
			<input type="text" name="Email" id="Email" value="Enter your email to subscribe"/>
			<input type="submit" name="submit" value="SUBMIT" class="submit-button" />
	</form>
   </div>
  </div>
  <div class="clear"></div>
  <!-- Social Icons -->
  <div class="grid_7">
  <a href="http://www.twitter.com/nataly_birch"><img src="/assets/frontend/default/images/twitter.png" alt="Twitter" /></a>
  <a href="http://feeds.feedburner.com/land-of-web/YPDH"><img src="/assets/frontend/default/images/rss.png" alt="RSS Feed" /></a>
  <a href="http://land-of-web.com"><img src="/assets/frontend/default/images/dribble.png" alt="Dribble" /></a>
  <a href="http://www.facebook.com//pages/Landofweb/203453913014366?sk=wall"><img src="/assets/frontend/default/images/facebook.png" alt="Facebook" /></a>
  <a href="http://www.stumbleupon.com/stumbler/NatalyBirch"><img src="/assets/frontend/default/images/stumbleupon.png" alt="Stumbleupon" /></a>
  </div>
  <div class="clear"></div>
  </div>
  </div>
</div>



	</body>
	</html>
