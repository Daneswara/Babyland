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
        $this->pengguna->input_data($data,'pengguna');
        redirect('Daftar/menampilkan');



    }

    

}
