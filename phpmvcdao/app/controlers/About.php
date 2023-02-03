<?php 

 class About extends Controler {
 	public function index($nama = 'dinda', $status = 'pelajar',$umur = 18)
 {
 	 $data['nama'] = $nama;
 	 $data['status'] = $status;
 	 $data['umur'] = $umur;
 	 $data['judul'] = 'About Me';
 	 $this->view('template/header', $data);
	 $this->view('about/index',$data);
	 $this->view('template/footer');
 }
 public function page()
{
		$data['judul'] = 'page';
		$this->view('template/header', $data);
 		$this->view('About/page');
 		$this->view('template/footer');
 	}
 }