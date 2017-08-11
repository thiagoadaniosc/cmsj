<?php 

namespace App\Controllers;

class Controller {
	private  $container;
	function __construct($container){
		$this->container = $container;
	}

	protected function getContainer (){
		return $this->container;
	}

	protected function renderView($response, $view = "home.php", $dados = array()){
		$this->container->view->render($response,$view,$dados);
	}
}