<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Keluar extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    function keluar(){
        $this->session->sess_destroy();
        redirect(base_url("index.php"));
    }

    

}
