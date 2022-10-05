<!-- proses database di halaman hasil -->
<?php

class M_hasil extends CI_Model{

    // memanggil semua data di tabel jawaban

    function tampilSemua()
    {
        return $this->db->get('jawaban')->result_array();
    }

    function n100()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','100');
        return $this->db->get();
    }

    function n90()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','90');
        return $this->db->get();
    }

    function n80()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','80');
        return $this->db->get();
    }

    function n70()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','70');
        return $this->db->get();
    }
    
    function n60()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','60');
        return $this->db->get();
    }

    function n50()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','50');
        return $this->db->get();
    }

    function n40()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','40');
        return $this->db->get();
    }

    function n30()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','30');
        return $this->db->get();
    }

    function n20()
    {
        $this->db->select('hasil');
        $this->db->from('jawaban');
        $this->db->like('hasil','20');
        return $this->db->get();
    }

    // function n10()
    // {
    //     $this->db->select('hasil');
    //     $this->db->from('jawaban');
    //     $this->db->like('hasil','10');
    //     return $this->db->get();
    // }




    function tampil_hasil(){

        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->limit(5);
        return $this->db->get(); 

    }
    // pembatasan data untuk pagination
    function get_hasil($limit,$start){
        return $this->db->get('jawaban',$limit,$start)->result_array();
    }

    // menghitung data yang ada di tabel jawaban
    function count_hasil(){
        return $this->db->get('jawaban')->num_rows();
    }

    // menyimpan hasil yang di kirimkan dari controller hasil
    function simpan_hasil($a){
        $this->db->insert('jawaban',$a);
    }

    // menghapus data 
    function hapus_hasil($where){ 
        $this->db->where($where);
        $this->db->delete('jawaban',$where);
    }

    // menghitung jumlah baris
    function baris(){
        return $this->db->get('jawaban')->num_rows();
    }

  



 

    
}