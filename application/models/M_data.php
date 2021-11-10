<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

    

    function detail_penghuni($where){

        $this->db->select('*');
        $this->db->where($where);
        $this->db->order_by('no_kamar');
        return $this->db->get('detail_penghuni');
    }

    function detail_pembayaran($where){
        return $this->db->get_where('detail_pembayaran', $where);
    }

    function detail_kamar($where){
        return $this->db->get_where('detail_kamar', $where);
    }

    function data_kamar(){
        
        $this->db->order_by('lantai','ASC');
        return $this->db->get('detail_kamar');
    }

    function data_kamar_terisi(){
        
        $this->db->order_by('lantai','ASC');
        $this->db->where('jml_penghuni','1');
        return $this->db->get('detail_kamar');
    }

  
     function data_user($where){
         $this->db->select('nama, username');
         $this->db->where($where);
         return $this->db->get('admin');
     }

    function insert_penghuni($data){
        $this->db->insert('penghuni', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    function insert_kamar($data){
        $this->db->insert('kamar', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    function insert_pembayaran($data){
        $this->db->insert('keuangan', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

     
     function insert_user($user_baru){
         $this->db->insert('admin', $user_baru);
         return ($this->db->affected_rows() > 0) ? true : false;
     }

    function update_harga($no_kamar, $harga){
        $this->db->where('no_kamar', $no_kamar);
        return $this->db->update('kamar', array('harga' => $harga)) ? true : false;
    }

    function update_penghuni($id_penghuni, $data){
        $this->db->where('id', $id_penghuni);
        return $this->db->update('penghuni', $data) ? true : false;
    }

    function update_pembayaran($id_pembayaran, $data){
        $this->db->where('id_pembayaran', $id_pembayaran);
        return $this->db->update('keuangan', $data) ? true : false;
    }

    function update_password($username, $password_baru){
        $this->db->where('username', $username);
        return $this->db->update('admin', array('password' => $password_baru)) ? true : false;
    }

    function delete_penghuni($id){
        $this->db->delete('penghuni', array('id' => $id));
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    function delete_pembayaran($id_pembayaran){
        $this->db->delete('keuangan', array('id_pembayaran' => $id_pembayaran));
        return ($this->db->affected_rows() > 0) ? true : false;
    }

     function delete_user($username){
         $this->db->delete('admin', array('username' => $username));
         return ($this->db->affected_rows() > 0) ? true : false;
     }
}
