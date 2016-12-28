<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Transaksi extends CI_Controller {
    private $alatBayi;
    public function __construct() {
        parent::__construct();
        $this->load->model('model_sewa');
        $this->load->model('model_transaksi');
        $this->load->helper('url');
        $this->load->library('cart');
        date_default_timezone_set('Asia/Jakarta');
        if ($this->session->userdata('username')) {
            
        } else {
            redirect('', 'refresh');
        }
    }

    public function index() {
        $nama = array("nama" => $this->model_transaksi->tampilTransaksi($this->model_sewa->getId()[0]['id_user']));
        $this->load->view('HalamanTransaksi', $nama);
    }

    public function prosesSewa() {
        $this->load->helper(array('url'));
        $grand_total = $this->uri->segment(3);
        // variabel jumlah alat saat ini
        $jumlah_alat_saat_ini = $this->uri->segment(4)
        // 
        $user_id = $this->model_sewa->getId()[0]['id_user'];
        $this->alatBayi = $this->cart->contents();
        $date= date('Y-m-d h:i:sa');

        $data2 = array(
            'tanggal' =>$date,
            "user_id" => $user_id,
            "total" => $grand_total
        );

        $this->model_transaksi->tambahTransaksi($data2);
        foreach ($this->alatBayi as $keranjang) {
            $data = array(
                "tanggal_mulai" => $keranjang['start'],
                "tanggal_akhir" => $keranjang['end'],
                "alat_id" => $keranjang['id'],
                "jumlah" => $keranjang['qty'],
                "status" => 1,
                "lama" => $keranjang['lama']
            );
            $this->model_transaksi->tambahDataTransaksi($data);
            
        }
        redirect(base_url('index.php/Controller_Transaksi/index'));
    }

}
