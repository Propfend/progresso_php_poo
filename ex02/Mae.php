<?php 

class Mae
{
    public $cabelo;
    public $olho;
    public $altura;

    public function __construct($cabelo, $olho, $altura = '') {
        $this->$cabelo = $cabelo;
        $this->$olho = $olho;
        $this->altura = $altura;
    }

    public function falar (string $fala) {
        return $fala;
    }

    public function andar () {
        return "andando";
    }
}