<?php

class Home extends Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');//memanggil file yang ada di folder views ke forlder home, namanya index.php
		$this->view('templates/footer');
	}
}