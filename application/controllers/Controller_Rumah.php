<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Rumah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    function keluar(){
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('username');
        redirect(base_url("index.php"));
    }
}
