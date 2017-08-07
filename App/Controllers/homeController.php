<?php

namespace App\Controllers;
use App\Models;


class homeController {
	public function index():array{
		$noticia = new Models\noticia();
		$dados = array(
				"olamundo" => $noticia->noticia()
		);	

		return $dados;
	}
}