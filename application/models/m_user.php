<!-- proses database di halaman user -->
<?php

class M_user extends CI_Model{

    // memanggil data user dari database
    function tampil_user(){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->limit(10);
        return $this->db->get(); 

    }

    // batas untuk pagination
    function get_user($limit,$start){
        return $this->db->get('users',$limit,$start)->result_array();
    }
    // total user
    function count_user(){
        return $this->db->get('users')->num_rows();
    }

    // simpan user
    function simpan_user($data){
        $this->db->insert('users',$data);
    }

    // edit user
    function edit_user($where){
        return $this->db->get_where('users',$where);
    }

    // proses edit
    function update_user($where,$data){
        $this->db->where($where);
        $this->db->update('users',$data);
    }

    // hapus user
    function hapus_user($where){
        $this->db->where($where);
        $this->db->delete('users',$where);
    }

    // proses baris 
    function baris(){
        return $this->db->get('users')->num_rows();
    }
    // tambah user
    function insertuser($data)
    {
        $this->db->insert('users',$data);
    }



 

    
}