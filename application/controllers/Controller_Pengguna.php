<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pengguna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
        $this->load->model('model_sewa');
    }

    public function index() {
        $data = array("user" => $this->model_pengguna->mendapatkanDaftarPengguna());
        $this->load->view('HalamanPengguna', $data);
    }

    function prosesHapus() {
        $id = $this->input->get('id');
        echo $id;
        $where = array('id_user' => $id,
            'user_id' => $id
        );
        $this->model_pengguna->hapusPengguna($where, 'pengguna');
        redirect('Controller_Pengguna/index');
    }

    function menampilkanHalamanProfil() {
        $user_id = array("username" => $this->session->userdata('username'));
        $id = $this->model_sewa->getId()[0]['id_user']; //mengakses model sewa==>tambahan
        $data = array("data" => $this->model_pengguna->mendapatkanDataPengguna($id));
        $this->load->view('HalamanProfil', $data);
    }

}
