<?php 
class Model_Pengguna extends CI_Model{

	function mendapatkanDaftarPengguna(){
		return $this->db->get('pengguna')->result();
	}
	function menambahPengguna($data,$table){
		$this->db->insert($table,$data);
	}
	function cekPengguna($table, $where){
		return $this->db->get_where($table,$where);
	}
	function hapusPengguna($data,$table){
		$this->db->where('user_id',$data['user_id']);
		$this->db->delete('sewa');
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete($table);
	}
	function simpanSession($data_session){
         $this->session->set_userdata($data_session);
	}
	function mendapatkanDataPengguna($id){
		$this->db->select('*');
	$this->db->from('pengguna');
	$this->db->where('pengguna.id_user',$id);
 
	return $this->db->get()->result();
	}
}

 ?>