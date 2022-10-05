<!-- kontrol halaman hasil -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (empty($this->session->userdata('login'))){
			redirect('login');
		}
		// pemanggilan model
		$this->load->model('m_hasil');
	}
	// memanggil controller hasil dengan fungsi index
	public function index()
	{
		// membuat pagination 
		$config['base_url'] = 'http://localhost/membaca/hasil/index';
		$config['total_rows'] = $this->m_hasil->count_hasil();
		$config['per_page'] = 10;

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
		// memanggil model hasil untuk menampilkan data dari database
		$data['hasil'] = $this->m_hasil->get_hasil($config['per_page'],$data['start']);

		// memanggil view untuk menampilkan data
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/v_hasil.php',$data); 
		$this->load->view('backend/v_footer.php');
	}

	
	
	// memanggil fungsi hapus dari controller hasil
	public function hapus($id){
		// menangkap id hasil yang mau di hapus
		$where = array('id_jawaban' => $id);
		// mengirimkan id yang di hapus ke model
		$this->m_hasil->hapus_hasil($where);
		// mengembalikan tampilan ke controller hasil (index)
		redirect('hasil');
	}

	// memanggil fungsi pdf dari controller hasil
	public function pdf()
	{
		// memanggil library untuk import data ke excel
		$this->load->library('dompdf_gen');

		//memanggil database dari model m_hasil
		$data['hasil'] = $this->m_hasil->tampil_hasil('jawaban')->result();

		//menampilkan data ke format excell
		$this->load->view('laporan_pdf', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan_Evaluasi.pdf", array('Attachment' => 0));


	}

	
	
	
}
