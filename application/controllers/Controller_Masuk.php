<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Masuk extends CI_Controller {

    private $pesan, $username, $password;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_pengguna');
    }

    public function index() {
        $this->load->view('HalamanMasuk');
    }

    function prosesMasuk() {
        $this->username = $this->input->post('username');
        $this->password = $this->input->post('password');
        $where = array(
            'username' => $this->username,
            'password' => md5($this->password)
        );
        $cek = $this->model_pengguna->cekPengguna("pengguna", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'username' => $this->username,
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
