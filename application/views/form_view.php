<?php echo validation_errors(); ?>
<?php $this->load->helper('url'); ?>

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
	<script type="text/javascript">
		function CheckSalaryTrans(val){
		 var element=document.getElementById('learninglanguage');
		 var element1=document.getElementById('teachinglanguage');
		 if(val=='tutor')
		   element1.style.display='block';
		  	 
		 else		   
		   element.style.display='block'; 
		  
		}
	</script>
</head>
<body>
	
		

			<!-- registration form -->
			<div class="main">
				<span class="shadow-top"></span>
				<!-- shell -->
				<div class="shell">
					<div class="container">
					<div class="registerform">
						<h1>Student Or Tutor Registration System-</h1><hr style="margin:8px 0px;"/>
						
						<form role="form" action="<?php echo base_url().'index.php/language/save' ?>" method="post">
						<div class="form-group">
						  <label for="fullname" style="text-align:left; width:130px;">Full Name:</label> 
						  <input type="text" value="" name="fullname" class="form-control" placeholder="Full Name" required />
						</div>
						<div class="form-group">
						 <label for="nickname" style="text-align:left;">Nick Name:</label>
						 <input type="text" value="" name="nickname" class="form-control" placeholder="Nick Name" required />
						</div>
						<div class="form-group">
						<label for="username" style="text-align:left;">Username:</label> 
						<input type="text" value="" name="username" class="form-control" placeholder="User Name" required/>
						</div>
						
						<div class="form-group">
						<label for="password" style="text-align:left;">Password:</label> 
						<input type="password" value="" name="password" class="form-control" placeholder="Password" required />
						</div>
						<div class="form-group">
						<label for="password-confirm" style="text-align:left;">Password (confirm):</label>
						<input type="password" value="" name="password-confirm" class="form-control" placeholder="Confirm Password" required/>
						</div>
						<div class="form-group">
						<label for="email" style="text-align:left;">E-Mail:</label> 
						<input type="text" value="" name="email" class="form-control" placeholder="Confirm Password" required/>
						</div>
						<div class="form-group">
						<label for="age" style="text-align:left;">Age:</label>  
						<input type="text" value="" name="age" class="form-control" placeholder="Age" required/>
						</div>
						<div class="form-group">
						<label for="gender" style="text-align:left;">Gender:</label>  
						<select name="gender" required style="height:30px;" class="form-control">
									<option value="">Select One</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
						</div>
						<div class="form-group">
						<label for="hobby" style="text-align:left;">Hobby:</label> 
							<input type="text" value="" name="hobby" class="form-control" placeholder="Hobby" required/>
						</div>
						<div class="form-group">
						<label for="interest" style="text-align:left;">Interest:</label>  
						<input type="text" value="" name="interest" class="form-control" placeholder="Interest" required/>
						</div>
						<div class="form-group">
						<label for="photo" style="text-align:left;">Photo:</label>   
						<input type="file" value="" name="photo"  required />
						</div>
						<div class="form-group">
						<label for="profession" style="text-align:left;">Profession:</label>  
						<select name="profession" class="form-control" style="height:30px;" required onchange='CheckSalaryTrans(this.value);'>
										<option value="">Select One</option>
										<option value="student">Student</option>
										<option value="tutor">Tutor</option>
									</select>
						</div>
						<div class="form-group" style="display:none;" id="learninglanguage">
						<label for="learninglanguage" style="text-align:left;">Choose Language Want to Learn:</label> 
						<select name="learninglanguage" class="form-control" style="height:30px;">
							<option value="">Select One</option>
							<option value="English">English</option>
							<option value="Japan">Japanees</option>
						</select>
						</div>
						<div class="form-group" style="display:none;" id="teachinglanguage">
						<label for="teachinglanguage" style="text-align:left;">Choose Language Want to Teach:</label> 
						<select name="teachinglanguage" class="form-control" style="height:30px;">
							<option value="">Select One</option>
							<option value="English">English</option>
							<option value="Japan">Japanees</option>
						</select>
						</div>
						<input type="submit" value="Register" name="submit-form" class="btn btn-large"/>
						</form>
					</div>					
				 </div>
				<!-- end of shell -->
				</div>
				<!-- end of container -->
			</div>
			<!-- end of registration form -->
		
		
	
</body>
</html>