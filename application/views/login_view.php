<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title>Language learning</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'asset/images/favicon.ico'?>" />
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/style.css'?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/flexslider.css'?>" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="<?php echo base_url().'asset/js/jquery-1.8.0.min.js'?>" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/magnific-popup.css'?>"> 
	
	<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	
	<!-- Magnific Popup core JS file -->
	<script src="<?php echo base_url().'asset/js/jquery.magnific-popup.js'?>"></script> 

	<script src="<?php echo base_url().'asset/js/jquery.flexslider-min.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'asset/js/functions.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'asset/js/ModalPopupWindow.js'?>" type="text/javascript"></script>
	
	  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style2.css'?>">	  
	  <script type="text/javascript" charset="utf-8" src="<?php echo base_url().'asset/js/jquery.leanModal.min.js'?>"></script>
	  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
	
</head>
<body>
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
									<?php echo validation_errors(); ?>
									<!--<form action="login.php" id="loginform" name="loginform" method="post"  enctype="multipart/form-data">-->
									<?php echo form_open('verifylogin'); ?>
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