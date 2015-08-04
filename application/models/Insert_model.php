 <?php
 
 class Insert_model extends CI_Model
 {
  public function __construct()
  {
	$this->load->database();
  }
		//not this project
		//public function get_maillist()
		//{
			//$query = $this->db->get('mailing_list');
			//return $query->result_array();
		//}
		
		public function insert($row)
		{
			$this->db->insert('users', $row);
			return $this->db->insert_id();
		}
 
 }
  
 ?>