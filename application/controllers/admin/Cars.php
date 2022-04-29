<?php 
DEFINED("BASEPATH") OR EXIT("NO DIRECT ACCESS ALLOWED");
class Cars extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Adminmodel');
		// if(!$this->session->userdata('login_status')=='login'){
		// 	return redirect(base_url('login'));
		// }
	}
 	public function index(){
 		if(!$this->session->userdata('login_status')=='login'){
			return redirect(base_url('login'));
		}
 		$data['cars'] = $this->Adminmodel->cars();
		$this->load->view('admin/manage-car',$data);
 	}
 	public function add_car(){
 		if(isset($_POST['submit'])){
 			if($this->form_validation->run('add_car_form')){
 				$insert_data = array(
 				'vehicle_model'=>$_POST['vehicle_model'],
 				'vehicle_number'=>$_POST['vehicle_number'],
 				'seating_capacity'=>$_POST['seating_capacity'],
 				'rent_per_day'=>$_POST['rent_per_day'],
 				
 				
 			);
 			$insert_data = $this->security->xss_clean($insert_data);
				$result = $this->Adminmodel->dbinsert('tbl_cars',$insert_data);
				if($result){

					echo "<script>alert('Car Added Successfully!');
					window.location.href='".base_url('cars')."';
					
					</script>";
				}
 			}
 			
 		}
 		$this->load->view("admin/add-car");
 	}

 	public function edit_car($id){
		$id = base64_decode($id);
		$data['users'] = $this->Adminmodel->dbfetch($id,'tbl_cars');
		$this->load->view('admin/edit-car',$data);
	}

	public function update_car(){

		$id = $this->input->post('hidden_id');
		$data = array();
		$pwd=null;
		if(isset($_POST['submit'])){
			
			if($this->form_validation->run('add_car_form')){
				$insert_data = array(
 				'vehicle_model'=>$_POST['vehicle_model'],
 				'vehicle_number'=>$_POST['vehicle_number'],
 				'seating_capacity'=>$_POST['seating_capacity'],
 				'rent_per_day'=>$_POST['rent_per_day'],
 				
 				
 			);
				$result = $this->Adminmodel->dbupdate('tbl_cars',$id,$insert_data);
				if($result){
					echo "<script>alert('Car Updated Successfully!');
					window.location.href='".base_url('cars')."';
					</script>";
				}
			}
		}
		//$this->load->view('admin/edit-user/'.base64_encode($id));

	}
	public function delete_user($id){
		$id = base64_decode($id);
		$result = $this->Adminmodel->dbdelete($id,'tbl_cars');
		if($result){
					echo "<script>alert('Data Deleted Successfully!');
					window.location.href='".base_url('cars')."';
					</script>";
				}
	}

//book car for rent...
	public function available_car(){
 		$data['cars'] = $this->Adminmodel->cars();
		$this->load->view('admin/available-car',$data);
 	}

 	public function rent_car($id){
		$id = base64_decode($id);
		$data['users'] = $this->Adminmodel->dbfetch($id,'tbl_cars');
		$this->load->view('admin/rent-car',$data);
	}

	public function book_car(){
		if(!$this->session->userdata('login_status')=='login'){
			return redirect(base_url('login'));
		}
		//$id = $this->input->post('hidden_id');
		$data = array();
		$pwd=null;
		if(isset($_POST['submit'])){
			 
				$insert_data = array(
 				'vehicle_model'=>$_POST['vehicle_model'],
 				'vehicle_number'=>$_POST['vehicle_number'],
 				'seating_capacity'=>$_POST['seating_capacity'],
 				'rent_per_day'=>$_POST['rent_per_day'],
 				'no_of_days'=>$_POST['no_of_days'],
 				'start_date'=>$_POST['start_date'],
 				'user_id'=>$this->session->userdata('id'),	
 			);
				$result = $this->Adminmodel->dbinsert('tbl_book_cars',$insert_data);
				if($result){
					echo "<script>alert('Car Booked Successfully!');
					window.location.href='".base_url('avaliable-cars')."';
					</script>";
				}
		
		}
		//$this->load->view('admin/edit-user/'.base64_encode($id));

	}
	public function booked_car(){
		if(!$this->session->userdata('login_status')=='login'){
			return redirect(base_url('login'));
		}
 		$data['cars'] = $this->Adminmodel->booked_cars();
		$this->load->view('admin/manage-booked-car',$data);
 	}

 }



 ?>
