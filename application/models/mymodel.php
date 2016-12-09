<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{
	
	
	function tampil(){
		$this->db->select('*');
		$this->db->from('sewa');
		$this->db->join('pengguna', 'sewa.user_id = pengguna.id_user','left'); 
		return $this->db->get()->result();
	}
	
}
 ?>