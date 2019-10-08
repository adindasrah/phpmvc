<?php

class Home extends Controller{
	public function index(){
		$this->view('home/index');//memanggil file yang ada di folder views ke forlder home, namanya index.php
	}
}