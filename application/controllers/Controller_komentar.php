<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_komentar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_komentar');
        $this->load->model('model_sewa');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function prosesKomentar() {
        $date = date('Y-m-d h:i:sa');
        $user_id = $this->model_sewa->getId()[0]['id_user'];
        $komentar = $this->input->post('komen');
        $alat_id = $this->input->post('hidden');
        $data = array(
            'alat_id' => $alat_id,
            'user_id' => $user_id,
            'komentar' => $komentar,
            'tanggal' => $date
        );
        $this->model_komentar->tambahKomentar($data);
        redirect("Controller_AlatBayi/index/$alat_id");
    }

}

?>