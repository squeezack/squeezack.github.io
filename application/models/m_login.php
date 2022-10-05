<!-- proses database di halaman login -->
<?php

    class M_login extends CI_Model{

    	// proses cek login
        function cek_login($where){
            return $this->db->get_where('users',$where);
        }

        // mengitung jumlah user
        function baris(){
            return $this->db->get('users')->num_rows();
        }
    }

?>