<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_SewaAlatBayi extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('model_sewa');
    $this->load->helper('url');
}
    public function index() {
        $id = $this->uri->segment(3);
        $value = $this->input->get('i');
        if($value == "alatbayi"){
            $data = array("user" => $this->model_sewa->melihatAlatBayiDisewakan($this->model_sewa->getId()[0]['id_user']));
            $this->load->view('HalamanDaftarSewaAlatBayi',$data);
        }
        else if($value == "tambah"){
            $this->load->view('HalamanMenyewakan');
        }
        else{
            $data = array("data" => $this->model_sewa->mendapatkanDataAlatBayi($id));
            $this->load->view('HalamanEditAlatBayi',$data);
        }
    }
    public function tambahAlatBayi(){

        $this->load->helper(array('form','file','url'));
        $config['upload_path'] = "./uploads/";
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size'] = '5058';

        $this->load->library('upload',$config);
        if(!empty($_FILES['userfile']['name'][0])){

            $this->upload->do_upload();

            $data=  array('upload_data' => $this->upload->data());
            $uploaddata = array(
                'user_id' =>$this->model_sewa->getId()[0]['id_user'],
                'nama_alat' => $this->input->post('alatbayi'),
                'jumlah' => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => $data['upload_data']['file_name'],
                'harga' => $this->input->post('harga')
            );
            var_dump($uploaddata);
            $this->model_sewa->tambahDataAlatBayi($uploaddata);
            $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
            redirect('Controller_SewaAlatBayi/index?i=alatbayi');

        }
        else{
            redirect(base_url("index.php"));
   
        }
    }
    function perbaruiAlatBayi(){

        $this->load->helper(array('form','file','url'));
        $id_alat = $this->uri->segment(3);
        $config1['upload_path'] = "./uploads/";
        $config1['allowed_types'] = 'jpg|png|gif|jpeg';
        $config1['max_size'] = '5058';
        $this->load->library('upload',$config1);
        
            $this->upload->do_upload();
            $data=  array('upload_data' => $this->upload->data());
            if(empty($_FILES['userfile']['name'][0])){
            $data['upload_data']['file_name'] = $this->input->post('nama_alat');
        }   
            $uploaddata = array(
                'user_id' =>$this->model_sewa->getId()[0]['id_user'],
                'nama_alat' => $this->input->post('alatbayi'),
                'jumlah' => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => $data['upload_data']['file_name'],
                'harga' => $this->input->post('harga')
            );
            $this->model_sewa->perbaruiDataAlatBayi($id_alat,$uploaddata);
            $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
            redirect('Controller_SewaAlatBayi/index?i=alatbayi');
    }

    
    public function image_resize($path, $file){
        $config_resize = array();
        $config_resize ['image_libary'] = 'gd2';
        $config_resize ['source_image'] = $path;
        $config_resize ['maintian_ratio'] = TRUE;
        $config_resize ['width'] = 480;
        $config_resize ['height'] = 480;
        $config_resize ['new_image'] = './uploads/thumbs';
        $this->load->library('image_lib',$config_resize);
        $this->image_lib->resize();
    }
    public function menghapusAlatBayi(){
        $where = array('id_alat'=>$this->input->get('id'));
        $this->model_sewa->menghapusDataAlatBayi($where,'sewa');
        redirect(base_url('index.php/Controller_SewaAlatBayi?i=alatbayi'));
    }

    

}
