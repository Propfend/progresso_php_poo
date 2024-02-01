<?php

Class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    public function cancelarMatricula () {
        if($this -> getMatricula() == False){
            print "a matricula ja esta cancelada"."<br/>"."<br/>";
        }
        else{
            $this -> setMatricula(False);
            print "matricula cancelada"."<br/>"."<br/>";
        }

    }

    private function getCurso(){
        return $this -> curso;
    }
    private function setCurso($c){
        $this -> curso = $c;
    }
    private function getMatricula(){
        return $this -> matricula;
    }
    private function setMatricula($m){
        $this -> matricula = $m;
    }
}