<?php

class Model_Pengguna extends CI_Model {

    function mendapatkanDaftarPengguna() {
        return $this->db->get('pengguna')->result();
    }
    private $cek = 0;
    function menambahPengguna($data, $table) {
        $where = array(
            'username' => $data['username']
        );
        $query = $this->db->get_where('pengguna', $where);
        $this->cek += $query->num_rows();
        $where = array(
            'email' => $data['email']
        );
        $query = $this->db->get_where('pengguna', $where);
        $this->cek += $query->num_rows();
        if($this->cek > 0){
            return false;
        } else {
            $this->db->insert($table, $data);
            return true;
        }
    }
    
    function updatePengguna($data, $table) {
        
    }

    function cekPengguna($table, $where) {
        return $this->db->get_where($table, $where);
    }

    function hapusPengguna($data, $table) {
        $this->db->where('user_id', $data['user_id']);
        $this->db->delete('sewa');
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete($table);
    }

    function simpanSession($data_session) {
        $this->session->set_userdata($data_session);
    }

    function mendapatkanDataPengguna($id) {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('pengguna.id_user', $id);

        return $this->db->get()->result();
    }

}

?>