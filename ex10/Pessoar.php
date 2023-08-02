<?php 
include('Livror.php');
abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($n, $i, $s){
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
        
    }

    function fazerNiver(){
        $this -> setIdade($this -> getIdade() + 1);
        print"a sua idade agora é".$this -> getIdade();
    }

    function getNome(){
        return $this -> nome;
    }

    function setNome($n){
        $this -> nome = $n;
    }

    function getIdade(){
        return $this -> idade;
    }

    function setIdade($i){
        $this -> idade = $i;
    }

    function getSexo(){
        return $this -> sexo;
    }

    function setSexo($s){
        $this -> sexo = $s;
    }

}
?>