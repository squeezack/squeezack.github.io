<!-- membuat halaman soal -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct(){
		parent::__construct();
		// mengecek apakah user sudah login
		if (empty($this->session->userdata('login'))){
			//jika belum kembalikan ke halaman login
			redirect('login');
		}
		// memanggil model
		$this->load->model('m_soal');
	}
	// membuat fungsi index
	public function index()
	{
		// membuat pagination
		$config['base_url'] = 'http://localhost/membaca/soal/index';
		$config['total_rows'] = $this->m_soal->count_soal();
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
		// memanggil model m_soal untuk memunculkan soal dari database
		$data['soal'] = $this->m_soal->get_soal($config['per_page'],$data['start']);

		// memunculkan halaman soal dari view
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_soal.php',$data); 
		$this->load->view('backend/v_footer.php');
	}
	// membuat fungsi tambah pada soal
	public function tambah()
	{
		// pemanggilan halaman tambah
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_tambahsoal.php');
		$this->load->view('backend/v_footer.php');
	}

	// proses tambah soal
	public function tambah_aksi()
	{
		// membuat variabel
		$keterangan = $this->input->post('keterangan');
		$a = $this->input->post('a');
		$b = $this->input->post('b'); 
		$c = $this->input->post('c'); 
		$d = $this->input->post('d');
		$jawaban = $this->input->post('jawaban');

		$foto = $_FILES['foto'];
		if ($foto =''){}else{
			$config['upload_path']		= './assets/foto';
			$config['allowed_types'] 	= 'jpg|png|gif';
			
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto= $this->upload->data('file_name');
			}
		}


		$data = array(
			
			'keterangan' =>$keterangan,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'jawaban' =>$jawaban,
			'foto' => $foto
		);
		// mengirimkan data yang di variabelkan ke model simapn_soal
		$this->m_soal->simpan_soal($data);
		// kembalikan ke tampilan soal (index)
		redirect('soal');
	}

	// membuat fungsi edit 
	public function edit($id){
		//memvariabelkan id yang di tangkap
		$where = array('id_soal' => $id);
		// memanggil soal berdasarkan id 
		$data['soal'] = $this->m_soal->edit_soal($where)->result();
		// menampilkan soal berdasarkan id
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_editsoal.php',$data);
		$this->load->view('backend/v_footer.php');
	}

	// proses edit
	public function edit_aksi(){
		// memvariabelkan data yang di edit
		$id = $this->input->post('id');
		$keterangan = $this->input->post('keterangan');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$jawaban = $this->input->post('jawaban');

		$data = array(
			'keterangan' => $keterangan,
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'jawaban' =>$jawaban
		);
		// inisialisasi id
		$where = array('id_soal' => $id );
		// memngembalikan data yang sudah di edit ke model
		$this->m_soal->update_soal($where,$data);
		// kembali ke halaman soal (index)
		redirect('soal');
	}
	// membuat fungsi hapus
	public function hapus($id){
		// inisialisasi id
		$where = array('id_soal' => $id);
		// menghapus data berdasarkan id
		$this->m_soal->hapus_soal($where);
 		// kembalikan ke tampilan soal (index)
		redirect('soal');
	}

	
	
	
}
