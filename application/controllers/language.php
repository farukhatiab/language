<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class language extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	{
			parent::__construct();
			$this->load->model('Insert_model');
			$this->load->helper('form');
	}
	 
	public function index()
	{
		
		
		$this->load->view('header_view');
		$this->load->view('main_view');
		$this->load->view('footer_view');
		
	}
	

	
	public function register()
	{
			$this->load->view('header_view');
			$this->load->view('form_view');
			$this->load->view('footer_view');
	}
	
	public function save()
	{
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('email','E-Mail:','trim|requigreen|valid_email');
			$this->form_validation->set_rules('password','Password:','trim|required|matches[password-confirm]');
			$this->form_validation->set_rules('password-confirm','Password (confirm):', 'trim|required');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('header_view');
				$this->load->view('form_view');
				$this->load->view('footer_view');
			}
			else {
					$this->load->helper('url');
					$postdata = array(
					'fullname' => $this->input->post('fullname'),
					'nickname' => $this->input->post('nickname'),
					'username' => $this->input->post('username'),
					'password' => MD5($this->input->post('password')),
					'email' => $this->input->post('email'),
					'age' => $this->input->post('age'),
					'gender' => $this->input->post('gender'),
					'hobby' => $this->input->post('hobby'),
					'interest' => $this->input->post('interest'),
					'photo' => $this->input->post('photo'),
					'profession' => $this->input->post('profession'),
					//'teachinglanguage' => "",
					//'learninglanguage' => "",
					'teachinglanguage' => $this->input->post('teachinglanguage'),
					'learninglanguage' => $this->input->post('learninglanguage'),
					);
					$this->Insert_model->insert($postdata);
					$this->load->view('header_view');
					$this->load->view('registrationSuccess_view');
					$this->load->view('footer_view');
				}
	}
	
	function login()
	{
		
		
		$this->load->view('header_view');
		$this->load->view('login_view');
		//$this->load->view('footer_view');
	}
	
		public function loged()
	{
		
		$this->load->view('user_page_view');
		
	}
	
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('language', 'refresh');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */