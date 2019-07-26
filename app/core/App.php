<?php 

class App {

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct(){
		$url = $this->parserURL();
		// var_dump($url);
		//controller, mendapatkan conttoler itu pada index ke-0
		if (file_exists('../app/controllers/' . $url[0] . '.php') ){
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/' . $this->controller . '.php' ;
		$this->controller = new $this->controller;


		//method, mendapatkan method itu pada index ke-1
		if ( isset($url[1])){
			if( method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}

		}

		//params, sisa index selanjutnya merupakan parameter
		if ( !empty($url)){
			$this->params = array_values($url);
		}

		//jalankan controller & method, serta kirimkan params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parserURL(){
		if(isset($_GET['url'])){
			//menghilangkan slash pada akhir url
			$url = rtrim($_GET['url'], '/');
			//untuk mengamankan url
			$url = filter_var($url, FILTER_SANITIZE_URL);
			//untuk memecah url berdasarkan tanda slash kemudian menjadikan string menjadi array
			$url = explode('/', $url);
			return $url;
		}
	}

}

 ?>