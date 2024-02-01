<?php

Class Reptil extends Animal
{
    protected $corEscama;

    public function locomover () {
        print"arrastando"."<br/>"."<br/>";
    }

    public function alimentar () {
        print"comendo vegetais"."<br/>"."<br/>";
    }

    public function fazerSom () {
        print"fazendo som"."<br/>"."<br/>";
    }
}