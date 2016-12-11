<?php 
class Model_Sewa extends CI_Model{

	public function tambahDataAlatBayi($data){
		$this->db->insert('sewa',$data);
	}
	function mendapatkanDataAlatBayi($id){
		$this->db->select('*');
		$this->db->from('sewa');
		$this->db->join('pengguna', 'sewa.user_id = pengguna.id_user','left');
		$this->db->where('sewa.id_alat',$id);
	 
		return $this->db->get()->result();
	}
	function menghapusDataAlatBayi($data,$table){
		$this->db->where($data);
		$this->db->delete($table);
	}
	function melihatAlatBayiDisewakan($id){
	$this->db->select('*');
	$this->db->from('sewa');
	$this->db->join('pengguna', 'sewa.user_id = pengguna.id_user','left');
	$this->db->where('sewa.user_id',$id);
 
	return $this->db->get()->result();
		// $this->db->where('user_id', $id);
		// return $this->db->get('sewa')->result();
}
	function cariAlatBayi($id){
	$this->db->select('*');
	$this->db->from('sewa');
	$this->db->join('pengguna', 'sewa.user_id = pengguna.id_user','left');
	$this->db->like('sewa.nama_alat',$id);
 
	return $this->db->get()->result();
		// $this->db->where('user_id', $id);
		// return $this->db->get('sewa')->result();
}
	public function getId(){
		if($this->session->userdata('status')=='login'){
			$this->db->where('username', $this->session->userdata('username'));
			//here we select every clolumn of the table
			$q = $this->db->get('pengguna')->result_array();
			return $q;
	}
	}
	public function perbaruiDataAlatBayi($where,$data){
		$this->db->where('id_alat',$where);
		$this->db->update('sewa',$data);

	}
}

 ?>