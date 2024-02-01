<?php 
Class Carro
{
    private $cor;
    private $cavalos;
    private $tamanho;
    private $velocidade;
    private $estado;

    function Carro($cor){
        $this -> cor = $cor;
        $this -> cavalos = 80;
        $this -> tamanho = 4.5;
        $this -> velocidade = 0;
        $this -> estado = False ;
    }

    function acelerar(){
        if($this -> getEstado() == True){
            $this -> setVelocidade($this -> getVelocidade() + 10);
            print"a velocidade do carro foi aumentada em 10"."<br/>"."<br/>";
        }
        else{
            print"o carro está desligado"."<br/>"."<br/>";
        }
    }
    function desacelerar(){
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
    function ligar(){
        if($this -> getEstado() == True){
            print"o carro já está ligado"."<br/>"."<br/>";
        }
        else{
            print"o carro foi ligado"."<br/>"."<br/>";
            $this -> setEstado(True);
        }
    }
    function  desligar(){
        if($this -> getEstado() == True){
            $this -> setEstado(False);
            $this -> setVelocidade(0);
            print"o carro foi desligado"."<br/>"."<br/>";
        }
        else{
            print"o carro ja está desligado"."<br/>"."<br/>";
        }
    }
    function parar () {
        if ($this -> getEstado(True)) {
            if ($this -> setVelocidade(0)) {
                print"o carro ja está parado"."<br/>"."<br/>";
            } else {
                $this -> setVelocidade(0);
            }
        } else {
            print"o carro está desligado"."<br/>"."<br/>";
        }
    }

    public function setCor ($cor) {
        $this -> cor = $cor;
    }

    public function getCor () {
        return $this -> cor;
    }

    public function setCavalos ($cavalos) {
        $this -> cavalos = $cavalos;
    }

    public function getCavalos () {
        return $this -> cavalos;
    }

    public function setTamanho ($tamanho) {
        $this -> tamanho = $tamanho;
    }

    public function getTamanho () {
        return $this -> tamanho;
    }

    public function setVelocidade ($velocidade) {
        $this -> velocidade = $velocidade;
    }

    public function getVelocidade () {
        return $this -> velocidade;
    }

    public function setEstado ($estado) {
        $this -> estado = $estado;
    }

    public function getEstado () {
        return $this -> estado;
    }
}
?>