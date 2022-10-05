
<!-- kontrol halaman dashboard  -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (empty($this->session->userdata('login'))){
			redirect('login');
		}
		// pemanggilan model => yang fungsinya untuk memanggil database dan tabel database
		$this->load->model('m_soal');
		$this->load->model('m_login');
		$this->load->model('m_hasil');
	}
	// memanggil dashboard dengan index
	public function index()
	{
		// memvariabelkan model 

		$q100 = $this->m_hasil->n100();
		$q90 = $this->m_hasil->n90();
		$q80 = $this->m_hasil->n80();
		$q70 = $this->m_hasil->n70();
		$q60 = $this->m_hasil->n60();
		$q50 = $this->m_hasil->n50();
		$q40 = $this->m_hasil->n40();
		$q30 = $this->m_hasil->n30();
		$q20 = $this->m_hasil->n20();
		// $q10 = $this->m_hasil->n10();

		$data['soal'] = $this->m_soal->baris();
		$data['user'] = $this->m_login->baris();
		$data['nilai100'] = $q100->num_rows();
		$data['nilai90'] = $q90->num_rows();
		$data['nilai80'] = $q80->num_rows();
		$data['nilai70'] = $q70->num_rows();
		$data['nilai60'] = $q60->num_rows();
		$data['nilai50'] = $q50->num_rows();
		$data['nilai40'] = $q40->num_rows();
		$data['nilai30'] = $q30->num_rows();
		$data['nilai20'] = $q20->num_rows();
		// $data['nilai10'] = $q10->num_rows();
		

		// pemanggilan view untuk tampilan dashboard
		$this->load->view('backend/v_header.php');
		$this->load->view('backend/v_sidebar.php');
		$this->load->view('backend/index.php',$data);
		$this->load->view('backend/v_footer.php');
	}
}
