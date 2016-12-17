<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Profil extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pengguna');
         $this->load->model('model_sewa');
    }
    public function index() {
        $user_id = array("username" => $this->session->userdata('username'));
        $id = $this->model_sewa->getId()[0]['id_user']; //mengakses model sewa==>tambahan
        $data = array("data" => $this->model_pengguna->mendapatkanDataPengguna($id));
        $this->load->view('HalamanProfil', $data);
    }
    function prosesPerbaruiProfil() {

        $this->load->helper(array('form', 'file', 'url'));
        // $id_alat = $this->uri->segment(3);
        $config1['upload_path'] = "./uploads/";
        $config1['allowed_types'] = 'jpg|png|gif|jpeg';
        $config1['max_size'] = '5058';
        $this->load->library('upload', $config1);

        $this->upload->do_upload();
        $data = array('upload_data' => $this->upload->data());
        if (empty($_FILES['userfile']['name'][0])) {
            $data['upload_data']['file_name'] = $this->input->post('nama_alat');
        }
        $uploaddata = array(
            // 'username'=>$this->input->post('username'),
            // 'password'=>$this->input->post('password'),
            'fotoprofil' => $data['upload_data']['file_name'],
            'nama'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'kota'=>$this->input->post('kota'),
            'alamat'=>$this->input->post('alamat'),
            'notelp'=>$this->input->post('notelp')
        );

        $id_user = $this->model_sewa->getId()[0]['id_user'];
        $this->model_pengguna->perbaruiProfilPengguna($id_user, $uploaddata);
        

        $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
        redirect('Controller_Profil/index');
    }
     public function image_resize($path, $file) {
        $config_resize = array();
        $config_resize ['image_libary'] = 'gd2';
        $config_resize ['source_image'] = $path;
        $config_resize ['maintian_ratio'] = TRUE;
        $config_resize ['width'] = 480;
        $config_resize ['height'] = 480;
        $config_resize ['new_image'] = './uploads/thumbs';
        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();
    }

    

}
?>