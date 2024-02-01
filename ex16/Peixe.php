<?php

Class Peixe extends Animal
{

    protected $corEscama;

    public function locomover () {
        print"nadando"."<br/>"."<br/>";
    }

    public function alimentar () {
        print"comendo substancias"."<br/>"."<br/>";
    }

    public function fazerSom () {
        print"peixe nao faz som"."<br/>"."<br/>";
    }

    public function soltarBolha () {
        print"soltando bolha"."<br/>"."<br/>";
    }

}