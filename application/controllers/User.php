<!-- membuat halaman user -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek login
		if (empty($this->session->userdata('login'))){
			redirect('login');
		}
		// pemanggilan model m_user
		$this->load->model('m_user');
	}

	// fungsi index untuk halaman index
	public function index()
	{
		// membuat pagination
		$config['base_url'] = 'http://localhost/membaca/users/index';
		$config['total_rows'] = $this->m_user->count_user();
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul><nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		// pemanggilan data dari model
		$data['user'] = $this->m_user->get_user($config['per_page'],$data['start']);
		// menampilkan data user
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_user.php',$data); 
		$this->load->view('backend/v_footer.php');
	}

	// membuat fungsi tambah user
	public function tambah()
	{
		// menampilkan data ke view

		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_tambahuser.php');
		$this->load->view('backend/v_footer.php');
	}

	// proses tambah
	public function tambah_aksi()
	{
		// inisialisasi data dari post
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password'); 
		$email = $this->input->post('email'); 
		

		$data = array(
			'nama_lengkap' =>$nama_lengkap,
			'username' => $username,
			'password' => $password,
			'email' => $email
			
		);
		// mengirimkan data ke model
		$this->m_user->simpan_user($data);
		// mengembalikan ke tampilan user (index)
		redirect('user');
	}

	// membuat fungsi edit user berdasarkan id
	public function edit($id){
		// inisialisasi id
		$where = array('id' => $id);
		// memanggil id dari database
		$data['user'] = $this->m_user->edit_user($where)->result();
		// menampilkan data yang di edit berdasarkan id
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_edituser.php',$data);
		$this->load->view('backend/v_footer.php');
	}

	// proses edit
	public function edit_aksi(){
		
		// inisialisasi data 
		$id = $this->input->post('id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
			'password' => $password,
			'email' => $email,
		);
		$where = array('id' => $id );
		// memasukan data yang sudah di edit ke database
		$this->m_user->update_user($where,$data);
		// kembali ke halaman user (index)
		redirect('user');
	}

	// fungsi hapus 
	public function hapus($id){
		// inisialisasi id
		$where = array('id' => $id);
		// menghapus data berdasarkan id
		$this->m_user->hapus_user($where);
		// kembali ke halaman user (index)
		redirect('user');
	}

	
	
	
}
