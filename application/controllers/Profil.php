<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
    }
    public function index() {
        $user_id = array("username" => $this->session->userdata('username'));
        $id = $this->model_sewa->getId()[0]['id_user']; //mengakses model sewa==>tambahan
        $data = array("data" => $this->model_pengguna->mendapatkanDataPengguna($id));
        $this->load->view('HalamanProfil', $data);
    }

    

}
