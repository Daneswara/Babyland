<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mymodel extends CI_Model{
	public function insert($data){
		echo 'aaaaa';
		$this->db->insert('sewa',$data);
		echo 'aaab';
	}
}
 ?>