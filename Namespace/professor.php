<?php

namespace App\Curso;

class Professor {
    public $nome;
    private $area;
    private $email;
    
    function __construct($nome, $area, $email) {
        $this->nome = $nome;
        $this->area = $area;
        $this->email = $email;
    }

    function getNome() {
        return $this->nome;
    }

    function getArea() {
        return $this->area;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    
}