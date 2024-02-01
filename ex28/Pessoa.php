<?php 
Class Pessoa{

    private $idade;

    public function __setIdade($i){
        $this -> idade = $i;
    }
    public function getIdade(){
        print($this -> idade);
    }

}