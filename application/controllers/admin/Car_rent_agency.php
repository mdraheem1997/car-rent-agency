<?php 
defined("BASEPATH") OR EXIT("NO DIRECT ACCESS ALLOWED");
class Car_rent_agency extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Adminmodel');
		// if(!$this->session->userdata('login_status')=='login'){
		// 	return redirect(base_url('login'));
		// }	
	}
	public function add_user(){
        
		$data = array();
		$user_id = $this->session->userdata('id');
		
		if(isset($_POST['submit'])){
			
			if($this->form_validation->run('add_agency_form')){
				$insert_data = array(
        	'email'=>$_POST['email'],
			'password'=>md5($_POST['password']),
			'mobile'=>$_POST['mobile'],
			'agency_name'=>$_POST['agency_name'],
			'agency_address'=>$_POST['agency_address'],
        );
		$insert_data['role'] = "Car Rent Agency";
		$email_address = $this->input->post('email');
		$this->db->where('email', $email_address);
		$result = $this->db->get('tbl_user');
		
		if($result->num_rows() > 0){
			echo "<script>alert('Email Already Registered');
			window.location.href='".base_url('agency-register')."';
			</script>";
			
			return false;
		}else{
			$insert_data = $this->security->xss_clean($insert_data);
				$result = $this->Adminmodel->dbinsert('tbl_user',$insert_data);
				if($result){
					echo "<script>alert('Registered Successfully!');
					window.location.href='".base_url('login')."';
					</script>";			
				}
		}
		
	    		
			}
		}
		$this->load->view('admin/add-agency');
	}
	public function manage_user(){
		echo "num";die;
		$data['user'] = $this->Adminmodel->dbget('tbl_user');
		$this->load->view('admin/manage-user',$data);
	}
	public function edit_user($id){
		$id = base64_decode($id);
		$data['users'] = $this->Adminmodel->dbfetch($id,'tbl_user');
		$this->load->view('admin/edit-user',$data);
	}
	public function update_user(){

		$id = $this->input->post('hidden_id');
		$data = array();
		$pwd=null;
		if(isset($_POST['submit'])){
			
			if($this->form_validation->run('add_user_form')){
				$insert_data = array(
        	'email'=>$_POST['email'],
			'mobile'=>$_POST['mobile'],
			'firstname'=>$_POST['firstname'],
			'lastname'=>$_POST['lastname'],
			'role'=>$_POST['role'],
			'status'=>$_POST['status'],

        );
				if($_POST['role']=="Agent"){
				 $pwd =ucfirst($_POST['firstname'])."@1234";
				}
				if($_POST['role']=="Sub Admin"){
					 $pwd =ucfirst($_POST['firstname'])."@1234";
				}
				if($_POST['role']=="User"){
					 $pwd ="User@1234";
				}
				$insert_data['password'] = $pwd;

				if($_FILES['profile_pic']['name']!="")
        {
	    	$config['upload_path'] = './uploads/';
	        $config['allowed_types'] =     'jpg|png|jpeg|gif';
	        $config['max_sizze'] =     20;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('profile_pic'))
	        {
	            
	            $data['error'] = $this->upload->display_errors();
	            
	            $this->session->set_flashdata('msg',$data['error']);
	           return redirect(base_url('register'));
	        }
	        else
	        {
	            $upload_data=$this->upload->data();
	            $insert_data['profile_pic'] = $upload_data['raw_name'].$upload_data['file_ext'];
	        }
	    }

				$result = $this->Adminmodel->dbupdate('tbl_user',$id,$insert_data);
				if($result){
					echo "<script>alert('User Updated Successfully!');
					window.location.href='".base_url('manage-user')."';
					</script>";
				}
			}
		}
		//$this->load->view('admin/edit-user/'.base64_encode($id));

	}
	public function delete_user($id){
		$id = base64_decode($id);
		$result = $this->Adminmodel->dbdelete($id,'tbl_user');
		if($result){
					echo "<script>alert('Data Deleted Successfully!');
					window.location.href='".base_url('manage-user')."';
					</script>";
				}
	}
	
	

}
 ?>
