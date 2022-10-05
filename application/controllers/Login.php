<!-- pembuatan halaman controller login -->

<?php

    class Login extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            //pemanggilan model m_login
            $this->load->model('m_login');
        }

        // pemanggilan tampilan login dengan controller index
        public function index()
        {
            // pemanggilan tampilan login
            $this->load->view('v_login');
        }

        // pemanggilan tampilan login dengan controller login_aksi
        public function login_aksi()
        {
            // menangkap data post yang di kirimkan user
            $user = $this->input->post('username', true);
            $pass = $this->input->post('password', true);
            


            // rule validasi
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() != FALSE){
                $where = array(
                    'username' => $user,
                    'password' => md5($pass)
                );
                $cekLogin = $this->m_login->cek_login($where)->num_rows();
                if ($cekLogin > 0 ){
                    $sess_data = array(
                        'username' => $user,
                        'login' => 'OK'
                    );
                    $this->session->set_userdata($sess_data);
                    redirect('dashboard');
                }else{
                    redirect('login');
                }
            }else{
                $this->load->view('v_login');
            }


        }
        // fungsi logout 
        public function logout()
        {
            // menghancurkan sesi login yang di buat
            $this->session->sess_destroy();
            // mengembalikan ke halaman login
            redirect('login');
        }

        //fungsi registrasi
        public function register()
        {
            // memanggil halaman registrasi yang di view
            $this->load->view('v_register.php');
        }

        // proses registrasi
        public function registerNow()
        {
            // mengecek validasi 
            if ($_SERVER['REQUEST_METHOD']=='POST')
            {
                $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if($this->form_validation->run() == TRUE)
                {
                    $nama_lengkap = $this->input->post('nama_lengkap');
                    $email = $this->input->post('email');
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');

                    $data = array(
                        'nama_lengkap' => $nama_lengkap,
                        'email' => $email,
                        'username' => $username,
                        'password' => md5($password)
                    );
                    // memangil model
                    $this->load->model('m_user');
                    // memanggil model dan memasukan data ke database
                    $this->m_user->insertuser($data);
                    // pesan apakan data berhasil di masukan ke database
                    $this->session->set_flashdata('success','Sukses, silahkan Kembali Login');
                    // mengembalikan ke halaman registrasi
                    redirect(base_url('login/register'));
                }
            }
        }
    }



?>