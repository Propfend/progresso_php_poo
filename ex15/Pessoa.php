<?php 
abstract Class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;

    public function fazAniversario () {
        $this -> setIdade($this -> getIdade() + 1);

    }

    public function __construct($n, $i, $s) {
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
    }

    protected function getNome () {
        return $this -> nome;
    }
    protected function setNome ($n) {
        $this -> nome = $n;
    }
    protected function getIdade () {
        return $this -> idade;
    }
    protected function setIdade ($i) {
        $this -> idade = $i;
    }
    protected function getSexo () {
        return $this -> sexo;
    }
    protected function setSexo ($s) {
        $this -> sexo = $s;
    }
}







?>