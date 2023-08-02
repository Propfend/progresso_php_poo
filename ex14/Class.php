<?php
Class Human{

    protected $olhos;
    protected $cabelo;

    public function __construct($o, $c){
        $this -> cabelo = $c;
        $this -> olhos = $o;
    }
    function AlteraCabelo($y){
        $this -> setCabelo($y);
        print"cabelo alterado para: ".$this -> getCabelo()."<br/>"."<br/>";
    }
    function AlteraOlhos($o){
        $this -> setOlhos($o);
        print"olhos alterado para: ".$this -> getOlhos()."<br/>"."<br/>";
    }
    function falar(){
        print"falei"."<br/>"."<br/>";
    }

    function discutir(){
        print"discuti"."<br/>"."<br/>";
    }

    function MostraCabelo(){
        print($this -> getCabelo())."<br/>"."<br/>";
    }
    function MostraOlhos(){
        print($this -> getOlhos())."<br/>"."<br/>";
    }

    private function getOlhos(){
        print($this -> olhos)."<br/>"."<br/>";
    }
    private function getCabelo(){
        print($this -> cabelo)."<br/>"."<br/>";
    }
    function setOlhos($o){
        $this -> olhos = $o;
    }
    private function setCabelo($c){
        $this -> cabelo = $c;
    }
}

Class Homem extends Human{
    function falar(){
        print"estou falando nesta bosta"."<br/>"."<br/>";
    }
}
?>