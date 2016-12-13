<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pengguna extends CI_Controller {

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
    
    function prosesPerbaruiProfil(){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $notelp = $this->input->post('notelp');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $data = array(
            'username' => $username,
            'nama' => $nama,
            'email' => $email,
            'notelp' => $notelp,
            'password' => md5($password),
            'alamat' => $alamat,
            'kota' => $kota
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
