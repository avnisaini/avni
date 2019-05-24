<?php

class Users extends CI_Controller {

function __construct() {
	
parent::__construct();
	$this->load->model('Users_model');
	$this->load->helper('form');
	 $this->load->library('form_validation');
	 $this->load->library('session');
	 $this->load->helper('url');
	}
	public function index() {
			
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[15]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[8]|max_length[15]');
		//$this->form_validation->set_rules('course', 'Course', 'required');
		$this->form_validation->set_rules('radio', 'Gender', 'required');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('registration_form');
		} else {
			
		$data['title']="Registration Form";	
		$data = array(
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'email'=>$this->input->post('email'),
		'mobile'=>$this->input->post('mobile'),
		'address'=>$this->input->post('address'),
		'password'=>$this->input->post('password'),
		'radio'=>$this->input->post('radio'),
		);
		
		//print_r($data);
		$this->Users_model->insert($data);
		$data['message'] = 'Data Inserted Successfully';
		$this->load->view('registration_form',$data);
		}
	}
	public function user_login(){
		
		//print_r($_POST);
		$this->load->library('session');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[15]');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('login_form');
		} else {
		$email = $this->input->post('email');
		$password =$this->input->post('password');
	
	if ($this->Users_model->login($email, $password)) {
            $this->session->set_userdata('email', $email);
			   redirect('users/profile');
        } else {
            $data['error'] = 'Invalid Account';
            $this->load->view('login_form', $data);
        } 
		}
	}
	
	public function logout() {
        $this->session->unset_userdata('email');
        redirect('users');
    }
	
	public function profile()
	 {
	 $result['data']=$this->Users_model->get_all();
	// print_r($result['data']);
	 $this->load->view('profile',$result);
	 }
	
	 
       public function update($id)
	{
		//$id=$this->input->get('id');
		$result['data']=$this->Users_model->get_user_by_id($id);
		//print_r($result['data']);
		$this->load->view('user_update',$result);
	
		if($this->input->post('update'))
		{
		
		$data = array(
					'first_name'=>$this->input->post('first_name'),
					'last_name'=>$this->input->post('last_name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'), 
					'address'=>$this->input->post('address'),
					'radio'=>$this->input->post('radio')
                );
		
	//print_r($data);
		$this->Users_model->update_user($id,$data);
		redirect("users/profile");
		}
	}
	public function file_view(){
		$this->load->view('file_view', array('error' => ' ' ));
	}
	
	public function do_upload(){
				
		$config = array(
		'upload_path' => "./upload/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		//'max_size' => "20", 
		'max_height' => "768",
		'max_width' => "1024"
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload())
		{
		$data = array('upload_data' => $this->upload->data());
		$this->load->view('upload_success',$data);
		}
		else
		{
		$error = array('error' => $this->upload->display_errors());
		$this->load->view('file_view', $error);
		}


	}

	public function delete_row($user_id) {
		$this->Users_model->did_delete_row($user_id);
		redirect("users/profile");
        }
	public function product(){
		$result['data']=$this->Users_model->get_all_product();
		//print_r($result['data']);
		$this->load->view('product',$result);
	}
   
}

?>
