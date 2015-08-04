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
					<span style="font-weight:bold; font-size:14px; color:#FFFFFF;"><?php echo $username; ?></span> &nbsp;| &nbsp;
					<a style="font-weight:bold; font-size:14px;" href="<?php echo base_url().'index.php/home/logout'?>" class="flatbt" >User Logout</a>
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
			<!-- main -->
		
			<div class="main">
				
				<!-- shell -->
				<div class="shell">
				  <div class="container">
				   
				  <!-- cols -->
				  
				  <div class="leftside">
				  <?php //echo $userInfo; ?>
				  	<ul class="toggle">
					
						<li class="icn_new_article"><a href="#">Manage Schedule</a></li>
						<li class="icn_edit_article"><a href="<?php echo base_url().'index.php/home/selectdata/'.$id ?>" target="_parent">Edit Profile</a></li>
						<li class="icn_categories"><a href="#">Language Help</a></li>
						<li class="icn_categories"><a href="<?php echo base_url().'index.php/home/logout'?>">Logout</a></li>
						
					</ul>
					<h3 style="margin-left:120%">AllUserTable</h3>
					<?php echo $message; ?>
				  </div>
				 
				  <!-- end of cols -->
				  </div>
				<!-- end of shell -->
				</div>
				<!-- end of container -->
				
			
			
			
			</div>
			
			<!-- for table start -->
			
			<!-- for table start -->
			
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