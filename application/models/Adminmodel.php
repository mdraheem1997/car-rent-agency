<?php 
DEFINED("BASEPATH") OR EXIT("NO DIRECT ACCESS ALLOWED");
class Adminmodel extends CI_Model{
	
	public function login($email,$password,$role){
		
		$sql = $this->db->where(['email'=>$email,'password'=>md5($password),'role'=>$role])
						->get('tbl_user');
			if($sql->num_rows()>0){
				return $sql->row_array();
			}
			else{
				return false;
			}
	}
	public function dbinsert($table,$data){
		
		return $this->db->insert($table,$data);
	}
	public function dbget($table){
		$user_id = $this->session->userdata('id');
		return $sql = $this->db->order_by('id','DESC')
								->where('del_action',0)
								->get($table)
								->result_array();
		
	}
	public function cars(){
		$query = $this->db->select()
				->order_by('id','DESC')
				->where('del_action','0')
				->get('tbl_cars');
		return $query->result_array();
	}
	public function booked_cars(){
		
		$this->db->order_by('tbl_book_cars.id','DESC')
				
				->select('tbl_book_cars.*, tbl_user.*')
	    		->from('tbl_user')

	    		->join('tbl_book_cars', 'tbl_user.id = tbl_book_cars.user_id');
	    $query = $this->db->get();
	    return $query->result_array();
	}
	public function dbfetch($id,$table){
		return $this->db->where('id',$id)
						->get($table)
						->row_array();
	}
	public function dbupdate($table,$id,$data){
		return $this->db->where('id',$id)
						->update($table,$data);
	}
	public function dbdelete($id,$table){
		return $this->db->set('del_action',1)
						->where('id',$id)
						->update($table);
	}
	
	
}
 ?>
