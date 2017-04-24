<?php 

	class Pessoa {
		public $CPF;
		public $nome;
		public $dependente;


		function __construct($cpf, $nome){
			$this->CPF=$cpf;
			$this->nome=$nome;
		}

		function incluirDependente($dependente){
			$this->dependente[] = $dependente;
		}

	}

	$pessoaObj = new Pessoa("11111111-11","Pedro Cabral");
	$pessoaDependenteObj = new Pessoa("222222222-22","Paula Cabral");
	$pessoaObj->incluirDependente($pessoaDependenteObj);

























