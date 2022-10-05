<!-- proses database di halaman soal -->
<?php

class M_soal extends CI_Model{

    // proses tampil soal
    function tampil_soal(){

        $this->db->select('*');
        $this->db->from('soal');

        // rumus lcm
        // x1 = ( a * 1 + 5 ) mod 30
         
        $this->db->order_by('rand() * 1 + 5 % 30');
        $this->db->limit(10);
        return $this->db->get();

    }

    // pembatasan pagination
    function get_soal($limit,$start){
        return $this->db->get('soal',$limit,$start)->result_array();
    }

    // total soal
    function count_soal(){
        return $this->db->get('soal')->num_rows();
    }

    // simpan soal
    function simpan_soal($data){
        $this->db->insert('soal',$data);
    }
    // edit soal
    function edit_soal($where){
        return $this->db->get_where('soal',$where);
    }

    // proses edit
    function update_soal($where,$data){
        $this->db->where($where);
        $this->db->update('soal',$data);
    }
    // hapus soal
    function hapus_soal($where){
        $this->db->where($where);
        $this->db->delete('soal',$where);
    }
    // jumlah baris 
    function baris(){
        return $this->db->get('soal')->num_rows();
    }

    // proses cek jawaban
    function cek_jawaban($params){
        $sql = "SELECT * FROM soal WHERE id_soal = ? AND jawaban = ?";
        $query = $this->db->query($sql, $params);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return [];
        }

    }



    
}