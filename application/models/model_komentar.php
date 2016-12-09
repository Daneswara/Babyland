<?php 
	class Model_komentar extends CI_Model{
		public function getIdAlat($id_user){
			if($this->session->userdata('status')=='login'){
				$this->db->where('user_id', $id_user);
				//here we select every clolumn of the table
				$q = $this->db->get('sewa')->result_array();
				return $q;
			}	
		}
		public function tambahKomentar($data){
			$this->db->insert('komentar', $data);
		}
		public function menampilkan($alat_id){
			$this->db->select('*');
			$this->db->from('komentar');
			$this->db->join('pengguna', 'komentar.user_id = pengguna.id_user','left');
			$this->db->where('komentar.alat_id',$alat_id);
		 
			return $this->db->get()->result();
		}

}
 ?>