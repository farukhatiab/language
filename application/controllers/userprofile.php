<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

	public	function index()
		{
			$this->db->select('id,fullname,nickname,username,password,email,age,gender,hobby,interest,photo,profession,teachinglanguage,learninglanguage,join_date');
			$this->db->order_by("fullname", "asc"); 
			$query = $this->db->get('users');
			$result ="";
				if ($query->num_rows() > 0)
				{	
					$result .="<table style='border:2px solid green; margin-left:120%; font-size:16px; '><tr><th style='border:2px solid green'>Full Name</th><th style='border:2px solid green'>Nick Name</th><th style='border:2px solid green'>User Name</th><th style='border:2px solid green'>Email</th><th style='border:2px solid green'>Gender</th><th style='border:2px solid green'>Profession</th><th style='border:2px solid green'>Teaching Language</th><th style='border:2px solid green'>Learning Language</th><th style='border:2px solid green'>Manage Schedule</th><th style='border:2px solid green'>Delete</th></tr>";
						foreach($query->result_array() as $row)
						{
							$result .="<tr style='border:2px solid green'><td style='border:2px solid green'>".$row['fullname']."</td>";
							$deleteId = $row['id'];
							$result .="<td style='border:2px solid green'>".$row['nickname']."</td>";
							$result .="<td style='border:2px solid green'>".$row['username']."</td>";
							$result .="<td style='border:2px solid green'> ".$row['email']."</td>";
							$result .="<td style='border:2px solid green'> ".$row['gender']."</td>";
							$result .="<td style='border:2px solid green'> ".$row['profession']."</td>";
							$result .="<td style='border:2px solid green'>".$row['teachinglanguage']."</td>";
							$result .="<td style='border:2px solid green'>".$row['learninglanguage']."</td>";
							$result .="<td style='border:2px solid green'><a href=\"selectdata/$deleteId\" style='text-decoration:none'>Manage Schedule</a></td>";
							$result .="<td style='border:2px solid green'><a href=\"selectdata/$deleteId\" style='text-decoration:none'>Delete</a></td>";
							$result .="</tr>";
						}
					$result .="</table>";
				}
			$data['message'] = $result;
			 
			//$this->load->view('viewuser',$data);
			//$this->load->view('user_page_view',$data);
			
		//start
			
			if($this->session->userdata('logged_in'))
				{
					$session_data = $this->session->userdata('logged_in');
					$data['username'] = $session_data['username'];
					$data['id'] = $session_data['id'];
					$this->db->select('id,fullname,nickname,username,password,email,age,gender,hobby,interest,photo,profession,teachinglanguage,learninglanguage,join_date');
					$this -> db -> where('username = ' . "'" . $data['username'] . "'");
					$query = $this->db->get('users');
					$result ="";

				if ($query->num_rows() > 0)
					{
						$result .="<table style='border:2px solid green; margin-left:120%; font-size:16px; '>
						<tr><th style='border:2px solid green'>Full Name</th><th style='border:2px solid green'>Nick Name</th><th style='border:2px solid green'>User Name</th><th style='border:2px solid green'>Email</th><th style='border:2px solid green'>Gender</th><th style='border:2px solid green'>Profession</th><th style='border:2px solid green'>Teaching Language</th><th style='border:2px solid green'>Learning Language</th><th style='border:2px solid green'>Edit</th></tr>";
						foreach($query->result_array() as $row)
							{

								$result .="<tr style='border:2px solid green'><td style='border:2px solid green'>".$row['fullname']."</td>";
								$deleteId = $row['id'];
								$result .="<td style='border:2px solid green'>".$row['nickname']."</td>";
								$result .="<td style='border:2px solid green'>".$row['username']."</td>";
								$result .="<td style='border:2px solid green'> ".$row['email']."</td>";
								$result .="<td style='border:2px solid green'> ".$row['gender']."</td>";
								$result .="<td style='border:2px solid green'> ".$row['profession']."</td>";
								$result .="<td style='border:2px solid green'>".$row['teachinglanguage']."</td>";
								$result .="<td style='border:2px solid green'>".$row['learninglanguage']."</td>";
								$result .="<td style='border:2px solid green'><a href=\"selectdata/$deleteId\" style='text-decoration:none'>Edit</a></td>";
								$result .="</tr>";
							}

						$result .="</table>";
					}
			
					$data['userInfo'] = $result;					
					$this->load->view('user_page_view', $data);
					//$this->load->view('user_page_view' $data);
	  	  
				}
			else
				{
					//If no session, redirect to login page
					redirect('login_view', 'refresh');
				}
			
			//end	
			
		}
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('language', 'refresh');
  }
  
  function selectdata($id)
	{
		//$this->load->view('header_view');userprofile
			$data['uid'] = $id;
			//$this->load->view('user_header_view');
			$this->load->view('userprofile',$data);	
			//$this->load->view('footer_view');
		
			
	}
  


}

?>