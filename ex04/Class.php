<?php 
Class Carro{
    private $cor;
    private $cavalos;
    private $tamanho;
    private $velocidade;
    private $estado;

    function Carro($a, $b, $c, $d, $e){
        $this -> cor = $a;
        $this -> cavalos = 80;
        $this -> tamanho = 4.5;
        $this -> velocidade = 0;
        $this -> estado = False ;
    }
    function Acelerar(){
        if($this -> getEstado() == True){
            $this -> setVelocidade($this -> getVelocidade() + 10);
            print"a velocidade do carro foi aumentada em 10"."<br/>"."<br/>";
        }
        else{
            print"o carro está desligado"."<br/>"."<br/>";
        }
    }
    function Desacelerar(){
        if($this -> getEstado() == True){
            if($this -> getVelocidade() < 10){
                $this -> setVelocidade($this -> getVelocidade() - 10);
                print"a velocidade do carro foi diminuida em 10"."<br/>"."<br/>";
            }
        else{
            print"o carro está com velocidade 0"."<br/>"."<br/>";
        }
        }
        else{
            print"o carro está desligado"."<br/>"."<br/>";
        }
    }
    function Ligar(){
        if($this -> getEstado() == True){
            print"o carro já está ligado"."<br/>"."<br/>";
        }
        else{
            print"o carro foi ligado"."<br/>"."<br/>";
            $this -> setEstado(True);
        }
    }
    function  Desligar(){
        if($this -> getEstado() == True){
            $this -> setEstado(False);
            $this -> setVelocidade(0);
            print"o carro foi desligado"."<br/>"."<br/>";
        }
        else{
            print"o carro ja está desligado"."<br/>"."<br/>";
        }
    }
    function Parar(){
        if($this -> getEstado(True)){
            if($this -> setVelocidade(0)){
                print"o carro ja está parado"."<br/>"."<br/>";
            }
            else{
                $this -> setVelocidade(0);
            }
        }
        else{
            print"o carro está desligado"."<br/>"."<br/>";
        }
    }
    function setCor($c){
        $this -> cor = $c;
    }
    function getCor(){
        return $this -> cor;
    }
    function setCavalos($ca){
        $this -> cavalos = $ca;
    }
    function getCavalos(){
        return $this -> cavalos;
    }
    function setTamanho($t){
        $this -> tamanho = $t;
    }
    function getTamanho(){
        return $this -> tamanho;
    }
    function setVelocidade($v){
        $this -> velocidade = $v;
    }
    function getVelocidade(){
        return $this -> velocidade;
    }
    function setEstado($e){
        $this -> estado = $e;
    }
    function getEstado(){
        return $this -> estado;
    }
}
?>