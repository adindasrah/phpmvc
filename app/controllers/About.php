<?php

class About extends Controller{
	public function index($nama = 'Adinda',$pekerjaan = 'Mahasiswa', $umur = 22){
		// echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun";

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$this->view('about/index', $data);
	}
	public function page(){
		//echo 'About/page';
		$this->view('about/page');
	}
}