<?php

namespace App\Models;

class noticia {
	private $id;
	private $titulo;
	private $conteudo;

	public function getId():int {
		return $this->id;
	}

	public function getTitulo():string{
		return $this->titulo;
	}

	public function getConteudo():string{
		return $this->conteudo;
	}

	public function setId(int $id){
		$this->id = $id;
	}

	public function setTitulo(string $titulo){
		$this->titulo = $titulo;
	}

	public function setConteudo(string $conteudo){
		$this->conteudo = $conteudo;
	}

	public function noticia(){
		return "noticia";
	}
}