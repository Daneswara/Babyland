<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Rumah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_sewa');
    }

    public function index() {
        $data = array("user" => $this->model_sewa->mendapatkanSemuaAlatBayi());
        $this->load->view('HalamanDepan', $data);
    }

    function keluar() {
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('username');
        redirect(base_url("index.php"));
    }

}
