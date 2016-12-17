<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pengguna extends CI_Controller {
    private $pengguna;
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
        $this->load->model('model_sewa');
        if($this->session->userdata('username')){
            
        } else {
            redirect('', 'refresh');
        }
    }

    public function index() {
        $this->pengguna = array("user" => $this->model_pengguna->mendapatkanDaftarPengguna());
        $this->load->view('HalamanPengguna', $this->pengguna);
    }

    function prosesHapus() {
        $id = $this->input->get('id');
        $where = array('id_user' => $id,
            'user_id' => $id
        );
        $this->model_pengguna->hapusPengguna($where, 'pengguna');
        redirect('Controller_Pengguna/index');
    }
}
