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
					<a href="<?php echo base_url().'index.php/language/login'?>" class="flatbtn" >User Login</a>
				</div>	
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
									<div class="sprite flag enc" data=""><a class="popup-modal1" href="#test-modal"><img src="<?php echo base_url().'asset/images/ukflag.png'?>" width="40" height="40" alt="Uk Flag" /></a></div>
									
									<div class="html-code">										
									  <div id="test-modal" class="mfp-hide white-popup">
									  	<p style="text-align:center; "> Join now and learn or teach English for free!</p>										
										<p style="text-align:center;"><a class="popup-modal-dismiss" href="<?php echo base_url().'index.php/language/register'?>">Sign Up</a></p>
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
									<div class="sprite flag ja"><a class="popup-modal1" href="#test-modal1"><img src="<?php echo base_url().'asset/images/japanflag.png'?>" width="40" height="40" alt="Uk Flag" /></a></div>
									<div class="html-code">										
									  <div id="test-modal1" class="mfp-hide white-popup">
									  	<p style="text-align:center;"> Join now and learn or teach Japanese for free!</p>										
										<p style="text-align:center;"><a class="popup-modal-dismiss" href="<?php echo base_url().'index.php/language/register'?>">Sign Up</a></p>
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
									<li><img src="<?php echo base_url().'asset/images/slider1.png'?>" alt="" /></li>			
									<li><img src="<?php echo base_url().'asset/images/globe.png'?>" alt="" /></li>
									<li><img src="<?php echo base_url().'asset/images/pic.jpg'?>" alt="" /></li>
									<li><img src="<?php echo base_url().'asset/images/pic1.jpg'?>" alt="" /></li>
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

		
		
</body>
</html>