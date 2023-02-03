<?php 

class Home extends ControLer{
	public function index()
	{
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('template/header', $data);
		$this->view('home/index',$data);  
		$this->view('template/footer');
	}
}