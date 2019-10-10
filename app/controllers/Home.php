<?php

class Home extends Controller{
	public function index(){
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();

		$this->view('templates/header', $data);
		$this->view('home/index',$data);//memanggil file yang ada di folder views ke forlder home, namanya index.php
		$this->view('templates/footer');
	}
}