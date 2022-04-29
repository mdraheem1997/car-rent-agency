<?php 
DEFINED("BASEPATH") OR EXIT("NO DIRECT ACCESS ALLOWED");
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Adminmodel');
		
	}
	public function index(){
		if($this->session->userdata('login_status')=='login'){
			return redirect(base_url('avaliable-cars'));
		}
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('role','Role','required');
			if($this->form_validation->run()===true){
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$role = $this->input->post('role');
				$result = $this->Adminmodel->login($email,$password,$role);
				if(!empty($result)){
					$this->session->set_userdata(['id'=>$result['id'],'role'=>$result['role'], 'login_status'=>'login','email'=>$result['email']]);
					return redirect(base_url('avaliable-cars'));
				}
				else{
						echo "<script>alert('Invalid Username or Password');
						window.location.href='".base_url('login')."';
						</script>";
					}
			}
		}
		$this->load->view('admin/login');
	}

	// logout.
	public function logout(){
		$this->session->sess_destroy();
		return redirect(base_url('login'));
	}
}

 ?>