<?php 
Class Mae{
    private $cabelo;
    private $cor;
    private $peito;

    function Mae($c, $co, $p){
        $this -> cabelo = $c;
        $this -> peito = $p;
        $this -> cor = $co;
    }
    public function setCabelo($c){
        $this -> cabelo = $c;
    }
    public function getCabelo(){
        return $this -> cabelo;
    }
    public function setCor($co){
        $this -> cor = $co;
    }
    public function getCor(){
        return $this -> cor;
    }
    public function setPeito($p){
        $this -> peito = $p;
    }
    public function getPeito(){
        return $this -> peito;
    }
}
?>