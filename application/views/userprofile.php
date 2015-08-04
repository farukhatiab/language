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
						
						echo "<div class=\"registerform\" style=\"height:450px; margin-left:35%;\">";
						echo "<h1>User Profile</h1>";
						echo "<hr style='margin-left:35%; margin-right:35%; margin-bottom:1%;'/>";
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