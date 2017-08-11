<?php

namespace App\Controllers;
use App\Models;


class homeController extends Controller {
	public function index($request, $response, $args){
		/*$noticia = new Models\noticia();
		$dados = array(
				"olamundo" => $noticia->noticia()
		);	

		return $dados;*/
		var_dump($this->getContainer());
		//$this->renderView($response,'login.php');
	}
}