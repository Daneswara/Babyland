<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_sewa');
        $this->load->model('model_transaksi');
        $this->load->helper('url');
        $this->load->library('cart');
        if($this->session->userdata('username')){
            
        } else {
            redirect('', 'refresh');
        }
    }
    public function index() {
        $nama = array("nama"=>$this->model_transaksi->tampilTransaksi($this->model_sewa->getId()[0]['id_user']));
        $this->load->view('HalamanTransaksi',$nama);
    }
    public function prosesSewa(){
        $this->load->helper(array('url'));
        $grand_total = $this->uri->segment(3);
        $user_id = $this->model_sewa->getId()[0]['id_user'];
        $cart = $this->cart->contents();

         $data2 = array(
            "user_id" => $user_id,
            "total" => $grand_total            
        );

         $this->model_transaksi->tambahTransaksi($data2);
         foreach ($cart as $keranjang) {
        $data = array(
            "tanggal_mulai" =>$keranjang['start'],
            "tanggal_akhir" =>$keranjang['end'],
            "alat_id"=>$keranjang['id'],
            "jumlah"=>$keranjang['qty'],
            "nama_alat"=>$keranjang['name'],
            "status"=>1,
            "lama"=>$keranjang['lama']
            );
                $this->model_transaksi->tambahDataTransaksi($data);
    }
    redirect(base_url('index.php/Transaksi/index'));
    }

    

}
