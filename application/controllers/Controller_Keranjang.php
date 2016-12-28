<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Keranjang extends CI_Controller {
    private $alatBayi;
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
        // penambahan variabel jumlah barang
        $this->load->helper(array('url'));
        $jumlah_alat_saat_ini = $this->uri->segment(3);
        // 
        $start = $this->input->post('date_start');
        $end = $this->input->post('date_end');
        $diff = (strtotime($end)- strtotime($start))/24/3600; 
        $this->alatBayi = array(
            'name' => $this->input->post('nama_alat'),
            'price' => $this->input->post('harga'),
            'qty' => $this->input->post('jumlah'),
            'id' => $this->input->post('hidden'),
            'start' => ($start),
            'end' => ($end),
            'id_user'=>$this->input->post('id_user'),
            'lama' => ($diff+1)
        );   
        $id = $this->alatBayi['id'];
                 // This function add items into cart.
                // This will show insert data in cart.
        // $this->model_keranjang->tambahAlatBayi();
        $this->model_keranjang->tambahAlatBayi($this->alatBayi);
        redirect(base_url('index.php/Controller_Keranjang/index/'.$jumlah_alat_saat_ini));
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
