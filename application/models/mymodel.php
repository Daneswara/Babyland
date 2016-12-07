<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mymodel extends CI_Model{
	public function insert($data){
		$this->db->insert('sewa',$data);
	}
	public function getId(){
		if($this->session->userdata('status')=='login'){
		$this->db->where('username', $this->session->userdata('username'));
		//here we select every clolumn of the table
		$q = $this->db->get('pengguna')->result_array();
		return $q;
	}
	}
	function tampil_data($id){
	$this->db->select('*');
	$this->db->from('sewa');
	$this->db->join('pengguna', 'sewa.user_id = pengguna.id_user','left');
	$this->db->where('sewa.user_id',$id);
 
	return $this->db->get()->result();
		// $this->db->where('user_id', $id);
		// return $this->db->get('sewa')->result();
	
	}
	function hapus_data($data,$table){
		$this->db->where($data);
		$this->db->delete($table);
	}
}
 ?>