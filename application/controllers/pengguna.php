<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_pengguna');
	}
    public function index() {
    	$data = array("user" => $this->model_pengguna->tampil_data());
        $this->load->view('HalamanPengguna',$data);
    }
    function prosesHapus(){
		$where = array('id_user'=>$this->input->get('id'));
		$this->model_pengguna->hapus_data($where,'pengguna');
		redirect('pengguna/index');
	}

    

}
