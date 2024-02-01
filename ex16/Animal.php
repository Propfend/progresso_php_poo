<?php 
Class Animal
{
    protected $peso;
    protected $idade;
    protected $membros;

    public function __construct($p, $i, $m) {
        $this -> peso = $p;
        $this -> idade = $i;
        $this -> membros = $m;
    }

    public function locomover () {

    }
    public function alimentar () {

    }

    public function fazerSom () {

    }
}

?>