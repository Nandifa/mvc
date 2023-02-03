<?php 
 
 class App {
protected $controler = 'Home';
protected $method = 'Index';
protected $params = [];

 	public function __construct()
 	{
 		$url =$this->parseURL();
 		//controler
		if(file_exists('../app/controlers/'. $url[0] .'.php')){
			$this->controler =$url[0];
			unset($url[0]);
		}

		require_once '../app/controlers/'. $this->controler. '.php';
		$this->controler = new $this->controler;
//method 
		if( isset($url[1])) {
			if( method_exists($this->controler, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

// params

if(!empty($url)) {
$this->params = array_values($url);
//var_dump($url);
}
//jalankan cotroler & method, serta params jika ada
call_user_func_array([$this->controler, $this->method], $this->params);

}
public function parseURL()
{
if( isset($_GET['url'])){
	$url =rtrim($_GET['url'], '/');
$url = filter_var($url,FILTER_SANITIZE_URL);
$url = explode('/',$url);
return $url;
	 }
  }
}