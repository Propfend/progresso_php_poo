<?php 
Class Conta{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function Conta(){
        $this -> saldo = 0;
        $this -> status = False;
    }
    function abrirConta($t){
        $this -> setTipo($t);
        $this -> setStatus(True);
        if($this -> getTipo() == 'CC'){
            $this -> saldo = 50;
        }
        elseif($this -> getTipo() == 'CP'){
            $this -> saldo = 150;
        }
        else{
            return 'digite um tipo de conta válido';
        }
    }
    function fecharConta(){
        if($this -> getSaldo() > 0){
            return 'você ainda possui dinero';
        }
        elseif($this -> getSaldo() < 0){
            return 'conta em débito';
        }
        elseif($this -> getSaldo() == 0){
            return 'conta fechada';
            $this -> setStatus(False);
        }
    }
    function depositar($r){
        if($this -> getStatus() == True){
            $this -> setSaldo($this -> getSaldo() + $r);
        }
        else{
            return 'abra a conta';
        }
    }
    function sacar($n){
        if($this -> getStatus() == True){
            if($this -> getSaldo() >= $n){
                $this -> setSaldo($this -> getSaldo() - $n);
            }
            else{
                return 'dinheiro insuficiente';
            }
        }
        else{
            return 'abra a conta';
        }
    }
    function pagarMensal(){
        $v = 0;
        if($this -> getTipo() == 'CC'){
            $v = 12;
        }
        elseif($this -> getTipo() == 'CP'){
            $v = 20;
        }
        if($this -> getStatus() == True){
            if($this -> getSaldo() >= $v){
                $this -> saldo -= $v;
            }
            else{
                return 'saldo insuficiente';
            }
        }
        else{
            return 'sua conta é inválida';
        }
    }
    function setnumConta($Num){
        $this -> numConta = $Num;
    }
    function getnumConta(){
        return $this -> numConta;
    }
    function setTipo($type){
        $this -> tipo = $type;
    }
    function getTipo(){
        return $this -> tipo;
    }
    function setDono($dono){
        $this -> dono = $dono;
    } 
    function getDono(){
        return $this -> dono;
    }
    function setSaldo($saldo){
        $this -> saldo = $saldo;
    }
    function getSaldo(){
        return $this -> saldo;
    }
    function setStatus($status){
        $this -> status = $status;
    }
    function getStatus(){
        return $this -> status;
    }
}
?>