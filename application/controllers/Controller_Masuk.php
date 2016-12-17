<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Masuk extends CI_Controller {

    private $pesan;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_pengguna');
    }

    public function index() {
        $this->load->view('HalamanMasuk');
    }

    function prosesMasuk() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->model_pengguna->cekPengguna("pengguna", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->model_pengguna->simpanSession($data_session);
            redirect(base_url("index.php/Controller_Profil/index"));
        } else {
            $this->pesan = "Mohon maaf username dan password anda salah!";
            ?><script>alert("<?php echo $this->pesan?>")</script><?php
            redirect('/Controller_Masuk/index', 'refresh');
        }
    }

}
