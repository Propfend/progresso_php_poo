<?php
abstract Class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;


    public function __construct($n, $i, $s) {
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
    }

    protected function ganharExp(){
        
    }

    protected function getnome(){
        return $this -> nome;
    }
    protected function setnome($n){
        $this -> nome = $n;
    }
    protected function getidade(){
        return $this -> idade;
    }
    protected function setidade($i){
        $this -> idade = $i;
    }
    protected function getsexo(){
        return $this -> sexo;
    }
    protected function setsexo($s){
        $this -> sexo = $s;
    }
}   


    
    
    
    
include('Interface.php');
include('Class.php');
include('view.php');
$a = new Video('video');
$b = new Gafanhoto('miguel', 15, 'M');
$c = new Vizualização($b, $a);
$c -> getespcectador();
    
?>