<?php 
class Usuario {
	private $username;
	private $senha;
	
	function getSenha(){
		return $this->senha;
	}
	function getUsername(){
		return $this->username;
	}
	
	function setSenha($value){
		$this->senha = $value;
	}
	function setUsername($value){
		$this->username = $value;
	}	


}

