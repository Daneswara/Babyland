<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SewaAlatBayi extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('mymodel');
}
    public function index() {

        $value = $this->input->get('i');
        if($value == "alatbayi"){
            $data = array("user" => $this->mymodel->tampil_data($this->mymodel->getId()[0]['id_user']));
            $this->load->view('HalamanDaftarSewaAlatBayi',$data);
        }
        else{
            $this->load->view('HalamanMenyewakan');
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
                'user_id' =>$this->mymodel->getId()[0]['id_user'],
                'nama_alat' => $this->input->post('alatbayi'),
                'jumlah' => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => $data['upload_data']['file_name'],
                'harga' => $this->input->post('harga')
            );
            var_dump($uploaddata);
            $this->mymodel->insert($uploaddata);
            $this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
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
        $config_resize ['new_image'] = './uploads/thumbs';
        $this->load->library('image_lib',$config_resize);
        $this->image_lib->resize();
    }
    public function prosesHapus(){
        $where = array('id_alat'=>$this->input->get('id'));
        echo 'aaaaa';
        $this->mymodel->hapus_data($where,'sewa');
        echo 'bbbbb';
        redirect(base_url('index.php/SewaAlatBayi?i=alatbayi'));
    }

    

}
