<?php 

class Cliente {
	public $codigo;
	public $nome;
	public $endereco;
	public $telefone;
	function imprime(){
		echo "$this->codigo <br>";
		echo "$this->nome <br>";
		echo "$this->endereco <br>";
		echo "$this->telefone <br>";
	}

}

$clienteObj = new cliente();
$clienteObj->codigo="12";
$clienteObj->nome="nome";
$clienteObj->endereco="endereco";
$clienteObj->telefone="55 87895644";

$clienteObj->imprime();
