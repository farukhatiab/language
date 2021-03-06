<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Simple - Free CSS template by ChocoTemplates.com</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 

	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/ModalPopupWindow.js" type="text/javascript"></script>
	
	  <link rel="stylesheet" type="text/css" media="all" href="style.css">	  
	  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
	  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
	
</head>
<body>
	<div id="wrapper">
		<!-- top-nav -->
		<nav class="top-nav">
			<div class="shell">
				<!-- header-left -->
				<div class="header-left">
					<div class="coname">Company Name</div>
				</div>
				
				<!-- header-middle -->
				<div class="header-middle">
					<div class="slogan">Free Online Language Learning</div>
				</div>
				
				<!-- header-right -->
				<div class="header-right">
					<a href="user-login.php" class="flatbtn" id="modaltrigger">User Login</a>
				</div>			
		</nav>
		
		
		<!-- end of top-nav -->
			<!-- header -->
			<header  id="header">
				<!-- shell -->
				<div class="shell">
					<div class="header-inner">
						<!-- header-cnt -->
						<div class="header-cnt">
							<div class="coname">Which Language would you like to learn or teach?</div>		
							<div class="flags">
								<div class="flag-container" data-lang="enc">
									<div class="sprite flag enc" data=""><a class="popup-modal1" href="#test-modal"><img src="css/images/ukflag.png" width="40" height="40" alt="Uk Flag" /></a></div>
									
									<div class="html-code">										
									  <div id="test-modal" class="mfp-hide white-popup">
									  	<p style="text-align:center;"> Join now and learn or teach English for free!</p>										
										<p style="text-align:center;"><a class="popup-modal-dismiss" href="user-register.php">Sign Up</a></p>
									  </div>
									</div>
									<script type="text/javascript">
									  $(function () {
										$('.popup-modal').magnificPopup({
										  type: 'inline',
										  preloader: false,
										  focus: '#username',
										  modal: true
										});
										$(document).on('click', '.popup-modal-dismiss', function (e) {
										  window.location.assign("user-register.php");
										  $.magnificPopup.close();
										});
									  });
									</script>
									<div class="language">English</div>
								</div>
								<div class="flag-container" data-lang="ja">
									<div class="sprite flag ja"><a class="popup-modal1" href="#test-modal1"><img src="css/images/japanflag.png" width="40" height="40" alt="Uk Flag" /></a></div>
									<div class="html-code">										
									  <div id="test-modal1" class="mfp-hide white-popup">
									  	<p style="text-align:center;"> Join now and learn or teach Japanese for free!</p>										
										<p style="text-align:center;"><a class="popup-modal-dismiss" href="user-register.php">Sign Up</a></p>
									  </div>
									</div>
									<script type="text/javascript">
									  $(function () {
										$('.popup-modal1').magnificPopup({
										  type: 'inline',
										  preloader: false,
										  focus: '#username',
										  modal: true
										});
										$(document).on('click', '.popup-modal-dismiss', '',  function (e) {
										  window.location.assign("user-register.php");
										  $.magnificPopup.close();
										});
									  });
									</script>
									<div class="language">Japanese</div>
								</div>
							</div>
						</div>
						<!-- end of header-cnt -->
						<!-- slider -->
						<div class="slider-holder">
							<div class="flexslider">
								<ul class="slides">
									<li><img src="css/images/slider1.png" alt="" /></li>								
									<li><img src="css/images/globe.png" alt="" /></li>
									<li><img src="css/images/pic.jpg" alt="" /></li>
									<li><img src="css/images/pic1.jpg" alt="" /></li>
								</ul>
							</div>
						</div>
						<!-- end of slider -->
						<div class="cl">&nbsp;</div>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of shell -->	
			</header>
			<!-- end of header -->
			<!-- main -->
			<div class="main">
				<span class="shadow-top"></span>
				<!-- shell -->
				<div class="shell">
					<div class="container">
						<section class="blog">
							<!-- content -->
							<div class="content" align="center">
								<div id="loginmodal" style="text-align:left;">
									<h1>User Login</h1>
									<form action="login.php" id="loginform" name="loginform" method="post"  enctype="multipart/form-data">
									  <label for="username">Username:</label>
									  <input type="text" name="username" id="username" class="txtfield" tabindex="1" required>
									  
									  <label for="password">Password:</label>
									  <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
									  
									  <div class="center"><input type="submit" name="submit-login"  class="flatbtn-blu" value="Log In" tabindex="3"></div>
									</form>
							  </div>
							</div>
							<!-- end of content -->

							
							<div class="cl">&nbsp;</div>
						</section>	
						<!-- cols -->
						<section class="cols">
							<div class="col">
								<h3>Proven learning methods</h3>
								<img src="css/images/convocation.png" alt="" class="alignleft"/>
								<div class="col-cnt">
									<p>Our award-winning courses are designed by qualified language experts</p>
								</div>
								<a href="#" class="view">View More</a></div>
							<div class="col">
								<h3>Worldwide community</h3>
								<img src="css/images/user.png" alt="" class="alignleft"/>
								<div class="col-cnt">
									<p>Practise your skills with our international community of over 40 million native speakers.</p>
								</div>
								<a href="#" class="view">View More</a></div>
							<div class="col">
								<h3>Join Today</h3>
								<img src="css/images/join-us.png" alt="" class="alignleft"/>
								<div class="col-cnt">
									<p>Registration, online language lessons, and access to native speakers for FREE.</p>
								</div>
								<a href="#" class="view">View More</a></div>
							<div class="cl">&nbsp;</div>
						</section>
						<!-- end of cols -->
					</div>
				<!-- end of shell -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of main -->
		</div>	
		<!-- footer-push -->
		<div id="footer-push"></div>
		<!-- end of footer-push -->
	
	<!-- end of wrapper -->
	<!-- footer -->
	<div  id="footer">
		<span class="shadow-bottom"></span>
		<!-- footer-cols -->
		<div class="footer-cols">
			<!-- shell -->
			<div class="shell">
			<div class="col">
					<h3><a href="#">Contact Us</a></h3>
					<div class="col-cnt">
						<p><strong>Email:</strong> <a href="#">info@yourwebsitename.com</a></p>
						<p><strong>Phone:</strong> ..........</p>
						<p><strong>Adress:</strong> ------------------- --- -----</p>	
					</div>
				</div>
				<div class="col-right">
					<div class="col-rcnt">Sign Up Now!</div>
					<ul>
						<li style="list-style-type:none;"><a href="#" target="_parent">Why?</a></li>
						<li style="list-style-type:none;"><a href="#" target="_parent">How?</a></li>
					</ul>
				</div>
				
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of shell -->
		</div>
		<!-- end of footer-cols -->
		<div class="footer-bottom">
			<div class="shell">
				<nav class="footer-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Solutions</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<div class="cl">&nbsp;</div>
				</nav>
				<p class="copy">&copy; Copyright 2014<span>|</span>All rights reserved. Design by <a href="http://www.webtechbd.com" target"_blank">WebTech</a></p>
			</div>
		</div>
	</div>
	<!-- end of footer -->
</body>
</html>