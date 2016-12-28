<?php

class Model_Transaksi extends CI_Model {

    public function tambahDataTransaksi($data) {
        $order_id = $this->getIdOrder()[0];
        $data = $order_id + $data;
        $this->db->insert('transaksi', $data);

<<<<<<< HEAD
        // $this->db->set('jumlah', 'jumlah';
        // $this->db->where('id_alat', $data['alat_id']);
        // $this->db->update('sewa');
=======
        $this->db->select('jumlah');
        $this->db->from('sewa');
        $this->db->where('id_alat', $data['alat_id']);
        $a = $this->db->get()->result_array();
        
        
        $this->db->set('jumlah', $a['0']['jumlah']-$data['jumlah']);
        $this->db->where('id_alat', $data['alat_id']);
        $this->db->update('sewa');
>>>>>>> 465bf71da79b1cae7e6eeb5794002273b2130299
        
        $this->cart->destroy();
    }

    public function tambahTransaksi($data2) {

        $this->db->insert('data_transaksi', $data2);
    }

    public function getIdOrder() {
        $this->db->select('id_order AS order_id');
        $this->db->from('data_transaksi');
        $this->db->order_by("order_id", "desc");
        $this->db->limit(null, null);
        return $this->db->get()->result_array();
    }

    public function tampilTransaksi($id) {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('data_transaksi', 'transaksi.order_id = data_transaksi.id_order', 'left');
        $this->db->join('sewa', 'transaksi.alat_id = sewa.id_alat', 'left');
        $this->db->where('data_transaksi.user_id', $id);

        return $this->db->get()->result();
    }

    public function mendapatkanDataTanggal($id) {
        $this->db->select('tanggal_mulai,tanggal_akhir');
        $this->db->from('transaksi');
        $this->db->where('transaksi.alat_id', $id);
        return $this->db->get()->result();
    }

    public function getId() {
        if ($this->session->userdata('status') == 'login') {
            $this->db->where('username', $this->session->userdata('username'));
            //here we select every clolumn of the table
            $q = $this->db->get('pengguna')->result_array();
            return $q;
        }
    }

}

?>