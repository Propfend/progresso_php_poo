<?php


Class Ave extends Animal
{
    protected $corPena;

    public function locomover(){
        print"voando"."<br/>"."<br/>";
    }

    public function alimentar(){
        print"comendo frutos"."<br/>"."<br/>";
    }

    public function fazerSom(){
        print"som de ave"."<br/>"."<br/>";
    }
    public function fazerNinho(){
        print"fazendo ninho"."<br/>"."<br/>";
    }
}