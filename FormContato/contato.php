<?php
class Contato {
	private $nome;
	private $idade;
	private $sexo;
	private $cidade;
	private $contato;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($value){
		$this->nome = $value;
	}	

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($value){
		$this->idade = $value;
	}	


	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($value){
		$this->sexo = $value;
	}	

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($value){
		$this->cidade = $value;
	}	

	public function getContato(){
		return $this->contato;
	}

	public function setContato($value){
		$this->contato = $value;
	}	


}