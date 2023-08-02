<?php 
Class Mulher{
    protected $cabelo;
    private $pele;
    private $olhos;

    public function __construct($c, $p, $o){
        $this-> cabelo = $c;
        $this -> pele = $p;
        $this -> olhos = $o;
    }

    function Faz_sexo(){
        print"fazendo sexo"."<br/>"."<br/>";
    }
    function getCabelo(){
        print"".$this -> cabelo."<br/>"."<br/>";
    }
    function setCabelo($c){
        $this -> cabelo = $c;
    }
    function getPele(){
        print"". $this -> pele."<br/>"."<br/>";
    }
    function setPele($p){
        $this -> pele = $p;
    }
    function getOlhos(){
        print"". $this -> olhos."<br/>"."<br/>";
    }
    function setOlhos($o){
        $this -> olhos = $o;
    }
}

Class Lésbica extends Mulher{

    public function Usa_dildo(){
        print"usando dildo"."<br/>"."<br/>";
    }

}

Class Hétera extends Mulher{

    public function Engravidar(){
        print"engravidando"."<br/>"."<br/>";
    }
}
?>