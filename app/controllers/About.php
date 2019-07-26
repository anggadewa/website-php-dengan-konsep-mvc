<?php 

class About extends Controller {

	public function index($nama = 'Angga Dewantoro', $username = 'dewaaantr'){
		// echo "Halo Selamat Datang $nama Username anda adalah $username";
		$data['nama'] = $nama;
		$data['username'] = $username;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page(){
		// echo "About/page";
		$data['judul'] = 'My Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}

?>