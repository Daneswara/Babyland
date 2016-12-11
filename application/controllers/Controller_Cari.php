<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Cari extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_sewa');
    }
    public function index() {
        $search = $this->input->post('search');
        $user = array("user" => $this->model_sewa->cariAlatBayi($search));
        $this->load->view('HalamanPencarian',$user);
    }

}
