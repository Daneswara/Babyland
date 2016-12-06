<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Masuk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengguna');
    }
    public function index() {
        $this->load->view('HalamanMasuk');
    }
    function prosesMasuk(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->pengguna->cekPengguna("pengguna",$where)->num_rows();
        
        if($cek > 0){
            $data_session = array(
                'username' => $username,
                'status' => "login"
                );
            $this->session->set_userdata($data_session);
            if($this->session->userdata('nama')=="admin"){
                redirect(base_url("index.php/Pengguna/index"));
            }
            else{
                redirect(base_url("index.php/Profil/index"));
            }
            
        }
        else{
            redirect('Controller_Masuk/index');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url("index.php/Profil/index"));
    }

    

}
