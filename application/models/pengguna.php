<?php 
class Pengguna extends CI_Model{

	function tampil_data(){
		return $this->db->get('pengguna');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function cekPengguna($table, $where){
		return $this->db->get_where($table,$where);
	}
}

 ?>