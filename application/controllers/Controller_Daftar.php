<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Daftar extends CI_Controller {
    
    private $pesan, $username, $nama, $email, $notelp, $password, $alamat, $kota;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_pengguna');
    }

    public function index() {
        $this->load->view('HalamanDaftar');
    }

    public function prosesDaftar() {
        $this->username = $this->input->post('username');
        $this->nama = $this->input->post('nama');
        $this->email = $this->input->post('email');
        $this->notelp = $this->input->post('notelp');
        $this->password = $this->input->post('password');
        $this->alamat = $this->input->post('alamat');
        $this->kota = $this->input->post('kota');
        $data = array(
            'username' => $this->username,
            'nama' => $this->nama,
            'email' => $this->email,
            'notelp' => $this->notelp,
            'password' => md5($this->password),
            'alamat' => $this->alamat,
            'kota' => $this->kota
        );
        $hasil = $this->model_pengguna->menambahPengguna($data, 'pengguna');
        if ($hasil) {
            redirect(base_url('index.php/Controller_Masuk/index'));
        } else {
            $this->pesan = "Mohon maaf username / email yang anda gunakan telah terdaftar";
            ?><script>alert("<?php echo $this->pesan?>")</script><?php
            redirect('/Controller_Daftar/index', 'refresh');
        }
    }

}
