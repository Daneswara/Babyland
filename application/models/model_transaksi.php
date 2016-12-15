<?php 
	class Model_Transaksi extends CI_Model{
		public function tambahTransaksi($data){
			$status = $this->db->query("UPDATE sewa SET jumlah=jumlah-'"$data['jumlah']"' WHERE id_alat='"$data['alat_id']"'");
			$this->db->insert('transaksi', $data);
			$this->cart->destroy();
			if($status){
				return true;
			}
			else{
				return false;
			}
		}

}
 ?>