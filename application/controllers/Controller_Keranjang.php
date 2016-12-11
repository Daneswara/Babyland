<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Keranjang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('model_keranjang');
    }
    public function index() {
        $this->load->view('halamanKeranjang');
    }
    function prosesKeranjang(){
                // Set array for send data.
          echo 'aaaa';

        $insert_data = array(
            'name' => $this->input->post('nama_alat'),
            'price' => $this->input->post('harga'),
            'qty' => $this->input->post('jumlah'),
            'id' => $this->input->post('hidden'),
            'lama' => $this->input->post('lama')
        );   
        $id = $insert_data['id'];
                 // This function add items into cart.
                // This will show insert data in cart.
        // $this->model_keranjang->tambahAlatBayi();
        $this->model_keranjang->tambahAlatBayi($insert_data);
        redirect(base_url('index.php/Controller_Keranjang/index'));
    }
    public function prosesHapusAlatBayi($rowid){
        if ($rowid==="all"){
                       // Destroy data which store in  session.
            $this->model_keranjang->hapusAlatBayi("all",$data);
        }
        else{
                    // Destroy selected rowid in session.
            $data = array(
                'rowid'   => $rowid,
                'qty'     => 0
            );
                     // Update cart data, after cancle.
            $this->model_keranjang->hapusAlatBayi("half",$data);
        }
        
                 // This will show cancle data in cart.
        redirect(base_url('index.php/Controller_Keranjang/index'));
    }
    

}
