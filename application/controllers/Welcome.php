<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->model('mymodel');
	}
    public function index() 
    {
    	$data = array("user" => $this->mymodel->tampil());
        $this->load->view('HalamanDepan',$data);
    }

    

}
