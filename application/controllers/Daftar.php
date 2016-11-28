<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pengguna');
    }
    public function menampilkan() {
        
        $data['pengguna'] = $this->pengguna->tampil_data()->result();
        $this->load->view('index',$data);
    }
    public function index(){
       $this->load->view('HalamanDaftar');
    }
    public function menambahPengguna(){

        $email = $this->input->post('email');
        $nama = $this->input->post('name');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $data = array(
            'email' => $email,
            'nama' => $nama,
            'password' => md5($password),
            'alamat' => $alamat,
            'notelp' => $notelp
            );
        $this->pengguna->input_data($data,'pengguna');
        redirect('Daftar/menampilkan');



    }

    

}
