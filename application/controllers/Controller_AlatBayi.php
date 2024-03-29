<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_AlatBayi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_komentar');
        $this->load->model('model_sewa');
        $this->load->model('model_transaksi');
    }
    public function index($id) {
        $nama = array("nama"=>$this->model_sewa->mendapatkanDataAlatBayi($id),"user" => $this->model_komentar->menampilkan($id),"tanggal"=>$this->model_transaksi->mendapatkanDataTanggal($id));
        $this->load->view("HalamanDetailAlatBayi",$nama);
    }

}
