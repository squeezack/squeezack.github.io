
<!-- membuat halaman home (frontend) -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
		parent::__construct();
		// memanggil fungsi model
		$this->load->model('m_soal');
		$this->load->model('m_hasil');
	}

 	// membaut halaman index(deafult) pada controller home
	public function index()
	{
		$this->load->view('frontend/index.php');
	}
	
	// membuat halaman  soal pada controller home
	public function soal()
	{
		//menangkap post dengan value nama 
		$data['nama'] = ($_POST['nama']);
		// memanggil model untuk menampilkan soal
		$data['soal'] = $this->m_soal->tampil_soal()->result();
		// menampilkan soal yang di panggil
		$this->load->view('frontend/soal.php',$data);
	}

	// membuat halaman  jawab soal pada controller home
	public function jawab_soal()
	{ 
		// mengecek apakah post berisi atau tidak
		if(empty($_POST['pilihan'])) {
			// jika tidak maka di balikan lagi ke halaman soal
			redirect('home/soal');
		}
		
			// membuat variabel untuk menghitung hasil
			$jumlah_benar = 0;
			$jumlah_salah = 0;

			// mengecek apakah jawaban yang di masukan sama atau tidak yang ada di database
			foreach($_POST['pilihan'] as $id_soal => $jawaban) {
				if (!empty($this->m_soal->cek_jawaban(array($id_soal, $jawaban)))) {
					
					$jumlah_benar++;
				} else {
					
					$jumlah_salah++;
				}
			}

			//menghitung score

			$jumlah_soal = 10;
		    $score = 100 / $jumlah_soal * $jumlah_benar;
		    $hasil	=number_format($score,2);

		    
		    // membuat variable untuk di masukan ke database
			$pilihan = implode('<br>',$this->input->post('pilihan')) ;
			$keterangan = implode('<br>',$this->input->post('keterangan')); 
			$nama = $this->input->post('nama') ;

			$a =  array(
				'nama' => $nama,
				'hasil' => $score,
				'soal' => $keterangan,
				'jawaban_anak' => $pilihan
			);

			// mengirimkan variabel ke model
			$this->m_hasil->simpan_hasil($a);

			// pengiriman data untuk tampilan halaman jawab_soal
			$data['pilihan'] = $_POST['pilihan'];
			$data['keterangan'] = $_POST['keterangan'];
			$data['jumlah_benar'] = $jumlah_benar ;
			$data['jumlah_salah'] = $jumlah_salah ;
			$data['nama'] = ($_POST['nama']);	
			// pemanggilan halaman jawab_soal
			$this->load->view('frontend/jawab_soal.php', $data);

			

	} 

		// pengembalian ke halaman home 
		public function jawab_aksi()
		{
			redirect('home');
		}

	
}
