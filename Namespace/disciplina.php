<?php

namespace App\Curso;

include_once 'professor.php';

class Discliplina {
 
    private $id;
    private $professor; //Armazenar o objeto professor;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getProfessor() {
        return $this->professor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProfessor($professor) {
        $this->professor = $professor;
    }


}