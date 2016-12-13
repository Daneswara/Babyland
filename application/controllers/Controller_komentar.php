<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Controller_komentar extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('model_komentar');
			$this->load->model('model_sewa');
			date_default_timezone_set('Asia/Jakarta');
		}

		public function prosesKomentar(){
			$date= date('Y-m-d h:i:sa');
			$user_id = $this->model_sewa->getId()[0]['id_user'];
			$komentar = $this->input->post('komen');
			$alat_id = $this->input->post('hidden');
			$data = array(
				'alat_id' =>$alat_id,
				'user_id' =>$user_id,
				'komentar' =>$komentar,
				'tanggal' =>$date
				);
			$this->model_komentar->tambahKomentar($data);
			redirect("Controller_AlatBayi/index/$alat_id");
	}
	  // public function tanggalan($tanggal){
   //      date_default_timezone_set('Asia/Jakarta');
   //      $ct= date('Y-m-d h:i:sa');
   //      $time = $tanggal;
   //      $now = new DateTime("$ct");
   //      $ref = new DateTime("$time");
   //      $diff = $now->diff($ref);
   //      $y=$diff->y;
   //      $m=$diff->m;
   //      $d=$diff->d;
   //      $h=$diff->h;
   //      $i=$diff->i;
   //      $s=$diff->s;

   //      $dateTimestamp1 = strtotime($ct);
   //      $dateTimestamp2 = strtotime($time);
   //      $diff= $dateTimestamp1-$dateTimestamp2;
   //      //echo $diff;
   //      if ($diff<=0)
   //         {
   //           echo "Enter a valid date";
   //         }
   //      else{
   //      if($m>12)
   //      {
   //      echo $y;
   //      echo " year ago";
   //      }
   //      elseif($m<1 && $d<1 && $h<1 && $i<1 && $s<60)
   //      {
   //      echo $s;
   //      echo " sec ago";
   //      }
   //      elseif($m<1 && $d<1 && $h<1 && $i<60)
   //      {
   //      echo $i;
   //      echo " mins ago";
   //      }
   //      elseif($m<1 && $d<1 && $h<48)
   //      {
   //      echo $h;
   //      echo " hrs ago";
   //      }
   //      elseif($m<1 && $d<30 && $h<24)
   //      {
   //          if($d==1)
   //          {
   //              echo 24+$h." hrs ago";
   //          }
   //          else
   //          {
   //              echo $d;
   //              echo " days ago";
   //          }
   //      }
   //      elseif($m<=12)
   //      {
   //          if($m > 0)
   //          {
   //              echo $m;
   //              echo " Month ago";
   //          }
   //          else
   //          {
   //              echo $d;
   //              echo " days ago";
   //          }       

   //      }
   //      }

   //          }
}
 ?>