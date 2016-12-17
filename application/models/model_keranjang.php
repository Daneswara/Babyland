<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Keranjang extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function tambahAlatBayi($insert_data) {
        $this->cart->insert($insert_data);
    }

    public function hapusAlatBayi($id, $data) {
        if ($id == "all") {
            $this->cart->destroy();
        } else {
            $this->cart->update($data);
        }
    }

}

?>