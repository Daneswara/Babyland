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
        $this->load->view('HalamanTransaksi');
    }
    public function prosesSewa(){
        $cart = $this->cart->contents();
         foreach ($cart as $keranjang) {
        $data = array(
            "user_id" => $keranjang['id_user'],
            "tanggal_mulai" =>$keranjang['start'],
            "tanggal_akhir" =>$keranjang['end'],
            "alat_id"=>$keranjang['id'],
            "jumlah"=>$keranjang['qty'],
            "nama_alat"=>$keranjang['name'],
            "status"=>1,
            "lama"=>$keranjang['lama']
            );
        $this->model_transaksi->tambahTransaksi($data);
    }
    }

    

}
