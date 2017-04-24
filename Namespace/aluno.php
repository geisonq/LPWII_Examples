<?php

namespace App\Curso;

class Aluno {
    public $nome;
    private $curso;
    private $email;
    
    function __construct($nome, $curso, $email) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->email = $email;
    }

    function getNome() {
        return $this->nome;
    }

    function getCurso() {
        return $this->curso;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }

    function setEmail($email) {
        $this->email = $email;
    }


 
    
}