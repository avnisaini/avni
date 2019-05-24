
<?php
class Users_model extends CI_Model{
function __construct() {
parent::__construct();
 $this->load->database();
}
	public function insert($data){
		$this->db->insert('student', $data);
	}
	public function insert_product($data){
		$this->db->insert('product', $data);
	}
	public function login($email, $password){
			$query = $this->db->get_where('student', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}
	
	public function get_all(){
		 $query=$this->db->query("select * from student");
		 return $query->result();
	}
		
	public function get_user_by_id($id){
		
			/*  $query=$this->db->query("select * from student");
			 $this->db->where('id', $id); */
			 $this->db->select('*');
			 $this->db->from('student');
			 $this->db->where('id', $id);
			 $query=$this->db->get();
			$this->db->last_query();
			 return $query->row_array();
	}
	 
	public function update_user($id,$data) {
                 $this->db->where('id', $id);
                $this->db->update('student', $data);
				return true;
            }

	public function did_delete_row($id){ 

				$this->db->where('id', $id);
                $this->db->delete('student');
				return true;

    }
	public function get_all_product(){
		 $query=$this->db->query("select * from products");
		 return $query->result();
	}
}
?>