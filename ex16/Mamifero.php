<?php

Class Mamifero extends Animal{
    protected $corPelo;

    public function locomover () {
        print"andando"."<br/>"."<br/>";
    }

    public function alimentar () {
        print"mamando"."<br/>"."<br/>";
    }

    public function fazerSom () {
        print"som de mamifero"."<br/>"."<br/>";
}
}