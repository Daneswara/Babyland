<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Pemberitahuan extends CI_Model {

    public function getIdOrder() {
        $this->db->select('id_order AS order_id');
        $this->db->from('data_transaksi');
        $this->db->order_by("order_id", "desc");
        $this->db->limit(null, null);
        return $this->db->get()->result_array();
    }

    public function tampilMenyewaAlatBayi($id) {
        $this->db->select('*');
        $this->db->from('data_transaksi');
        $this->db->where('data_transaksi.user_id', $id);

        return $this->db->get()->result();
    }

    public function tampilAlatBayiDisewakan($id) {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('data_transaksi', 'transaksi.order_id = data_transaksi.id_order', 'left');
        $this->db->join('sewa', 'transaksi.alat_id = sewa.id_alat', 'left');
        $this->db->join('pengguna', 'sewa.user_id = pengguna.id_user', 'left');
        $this->db->where('pengguna.id_user', $id);

        return $this->db->get()->result();
    }

}

?>