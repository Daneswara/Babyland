<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SewaAlatBayi extends CI_Controller {

    public function index() {
        $value = $this->input->get('i');
        if($value == "alatbayi"){
            $this->load->view('HalamanDaftarSewaAlatBayi');
        }
        else{
            $this->load->view('HalamanMenyewakan');
        }
    }
    public function tambahAlatBayi(){

        $this->load->helper(array('form','file','url'));
        $path = '../upload';
        $config['upload_path'] = APPPATH.'upload/';
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = '5058';

        $this->load->library('upload');
        $this->upload->initialize($config);
        if(!empty($_FILES['userfile']['name'][0])){
            $this->upload->do_upload();
            var_dump($config['upload_path'] );
            var_dump($this->upload->do_upload());
            $data=  array('upload_data' => $this->upload->data());
            $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
            $uploaddata = array(
                'user_id' => 1,
                'nama_alat' => $this->input->post('alatbayi'),
                'jumlah' => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'foto' => $data['upload_data']['file_name']
            );
            echo 'lima';
            $this->load->model('mymodel');
            $this->mymodel->insert($uploaddata);
            echo 'tujuh';
            redirect('SewaAlatBayi/index');

        }
        else{
            redirect(base_url("index.php"));
   
        }
    }
    public function image_resize($path, $file){
        $config_resize = array();
        $config_resize ['image_libary'] = 'gd2';
        $config_resize ['source_image'] = $path;
        $config_resize ['maintian_ratio'] = TRUE;
        $config_resize ['width'] = 480;
        $config_resize ['height'] = 480;
        $config_resize ['new_image'] = base_url().'/upload/thumb';
        $this->load->library('image_lib',$config_resize);
        $this->image_lib->resize();
    }

    

}
