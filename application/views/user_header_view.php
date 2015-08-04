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
	
	  <!--link rel="stylesheet" type="text/css" media="all" href="<?php //echo base_url().'asset/css/style2.css'?>"-->	  
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
						<li class="icn_new_article"><a href="<?php echo base_url().'index.php/home'?>">Home</a></li>
						<li class="icn_new_article"><a href="#">Manage Schedule</a></li>
						<li class="icn_edit_article"><a href="<?php echo base_url().'index.php/home/selectdata/'.$id ?>" target="_parent">Edit Profile</a></li>
						<li class="icn_categories"><a href="#">Language Help</a></li>
						<li class="icn_categories"><a href="<?php echo base_url().'index.php/home/logout'?>">Logout</a></li>
						
					</ul>
					<!-- for edit profile start -->
				 <?php 
$this->db->select('id,fullname,nickname,username,password,email,age,gender,hobby,interest,photo,profession,teachinglanguage,learninglanguage,join_date');
			$this->db->where('id', $uid);
			$query = $this->db->get('users');
			$result ="";
				if ($query->num_rows() > 0)
				{
					
					foreach($query->result_array() as $row)
					{
						$Id = $row['id'];
						$fullname = $row['fullname'];
						$nickname = $row['nickname'];
						$username = $row['username'];
						$email = $row['email'];
						$gender = $row['gender'];
						$profession = $row['profession'];
						$teachinglanguage = $row['teachinglanguage'];
						$learninglanguage = $row['learninglanguage'];
						//echo "<div style=\"clear:both\"></div>";
						//echo "<div class=\"registerform\" style=\"height:auto; float:right;\">";
						echo "<div class=\"registerform\" style=\"height:auto; width:400px; margin-left:120%;\">";
						echo "<h1 style='margin-left:35%;'>User Profile</h1>";
						echo "<hr style='margin-bottom:1%; margin-top:1%;'/>";
						echo "<form action=\"../updateuser/$Id\" method=\"post\" style='margin-left:35%;' >
						
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Full Name:</label>
						<input type=\"text\" name=\"fullname\" class=\"form-control\" value=\"$fullname\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Nick Name:</label>
						<input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"$nickname\"/>
						</div>						
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">User Name:</label>
						<input type=\"text\" name=\"username\" class=\"form-control\" value=\"$username\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Email:</label>
						<input type=\"text\" name=\"email\" class=\"form-control\" value=\"$email\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Gender:</label>
						<input type=\"text\" name=\"gender\" class=\"form-control\" value=\"$gender\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Profession:</label>
						<input type=\"text\" name=\"profession\" class=\"form-control\" value=\"$profession\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Teachinglanguage:</label>
						<input type=\"text\" name=\"teachinglanguage\" class=\"form-control\" value=\"$teachinglanguage\"/>
						</div>
						<div class=\"form-group\"> 
						<label for=\"fullname\" style=\"text-align:left; width:130px;\">Learninglanguage:</label>
						<input type=\"text\" name=\"learninglanguage\" class=\"form-control\" value=\"$learninglanguage\"/>
						</div>
						<input type=\"submit\" value=\"Update\" name=\"submit-settings\" class=\"btn btn-large\"/>
						</form>	";
						echo "<div>";
						
					}
					
					
				} ?>
				<!-- for edit profile end -->
					
				  </div>
				  <div style="clear:both"></div>
				 
				 
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
		
	
	<!-- end of footer -->
</body>
</html>