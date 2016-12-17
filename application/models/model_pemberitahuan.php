<?php 
	class Model_Pemberitahuan extends CI_Model{
		public function tambahDataTransaksi($data){		
			$order_id = $this->getIdOrder()[0];
			$data = $order_id+$data;
			$this->db->insert('transaksi', $data);
			// 
			// $this->db->set('jumlah', "'jumlah-$data['jumlah']'", FALSE);
			// $this->db->where('id_alat', $data['alat_id']);
			// $this->db->update('sewa');
			// 
			$this->cart->destroy();
		}
		public function tambahPemberitahuan($data2){
			$this->db->insert('data_transaksi', $data2);
		}
		public function getIdOrder(){
			$this->db->select('id_order AS order_id');
			$this->db->from('data_transaksi');
			$this->db->order_by("order_id","desc");
			$this->db->limit(null,null);
			return $this->db->get()->result_array();
		}
		public function tampilPemberitahuan($id){
			$this->db->select('*');
			$this->db->from('transaksi');
			$this->db->join('data_transaksi', 'transaksi.order_id = data_transaksi.id_order','left');
                        $this->db->join('sewa', 'transaksi.alat_id = sewa.id_alat','left');
			$this->db->where('data_transaksi.user_id',$id);
		 
			return $this->db->get()->result();	
		}

}
 ?>