<?php

Class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function ReceberAumento($a){
        $this -> setSalario($this -> getSalario() + $a);
    }
    private function getEspecialidade(){
        return $this -> especialidade;
    }
    private function setEspecialidade($e){
        $this -> especialidade = $e;
    }
    private function getSalario(){
        return $this -> salario;
    }
    private function setSalario($s){
        $this -> salario = $s;
    }
}