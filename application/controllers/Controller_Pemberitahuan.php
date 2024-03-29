<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pemberitahuan extends CI_Controller {
    private $pemberitahuan;
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
        $this->load->model('model_pemberitahuan');
        $this->load->model('model_sewa');
        $this->load->helper('url');
        if($this->session->userdata('username')){
            
        } else {
            redirect('', 'refresh');
        }
    }
    public function index() {
        $this->pemberitahuan = array("sewa" => $this->model_pemberitahuan->tampilMenyewaAlatBayi($this->model_sewa->getId()[0]['id_user']),
            "disewakan" => $this->model_pemberitahuan->tampilAlatBayiDisewakan($this->model_sewa->getId()[0]['id_user']));
        $this->load->view('HalamanPemberitahuan', $this->pemberitahuan);
    }

    

}
