<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Daftar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pengguna');
    }
    public function menampilkan() {
        
        $this->load->view('HalamanDepan');
    }
    public function index(){
       $this->load->view('HalamanDaftar');
    }
    public function prosesDaftar(){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $data = array(
            'username'=> $username,
            'nama' => $nama,
            'email' => $email,
            'notelp' => $notelp,
            'password' => md5($password),
            'alamat' => $alamat,
            'kota' => $kota
            );
        $this->model_pengguna->menambahPengguna($data,'pengguna');
            redirect(base_url('index.php/Controller_Masuk/index'));

    }

    

}
