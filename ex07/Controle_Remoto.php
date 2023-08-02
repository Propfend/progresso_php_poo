<?php 
include('Class.php');
Class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    function ControleRemoto(){
        $this -> setVolume(50);
        $this -> setLigado(False);
        $this -> setTocando(False);
    }
    function ligar(){
        if($this -> getLigado() == True){
        }
        else{
            $this -> setLigado(True);
            return 'o bagui foi ligado'."<br/>";
        }
    }
    function desligar(){
        if($this -> getLigado() == False){
            return 'o bagui já tá desligado'."<br/>";
        }
        else{
            $this -> setLigado(False);
            return'o bagui foi desligado'."<br/>";
        }
    }
    function abrirMenu(){
        $u = 0;
        $r = 0;
        $h = $this -> getVolume();
        if($this -> getLigado() == True){
            $u == 'SIM';
        if($this -> getTocando() == True){
            $r == 'SIM';
        }
        }
        else{
            $u == 'NÂO';
            $r == 'NÂO';
        }
        return'está ligado? '."$u"."<br/>";
        return 'SOM: '."$h"."<br/>";
        return 'tocando: '."$h"."<br/>";
    }
    function fecharMenu(){
        return 'fechando menu'."<br/>";
    }
    function maisVolume(){
        if($this -> getLigado() == True){
            if($this -> getVolume() < 100){
                $this -> setVolume($this -> getVolume() + 5);
                return 'aumentado';
            }
            else{
                return 'volume já tá no máximo'."<br/>";
            }
        }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
    }
    function menosVolume(){
        if($this -> getLigado() == True){
            if($this -> getVolume() < 100){
                $this -> setVolume($this -> getVolume() + 5);
            }
            else{
                return 'volume já tá no mínimo'."<br/>";
            }
        }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
    }
    function ligarMudo(){
        if($this -> getLigado() == True){
            if($this -> getVolume() > 0){
                $this -> setVolume(0);
            }
            else{
                return 'bagui ja ta no mínimo'."<br/>";
            }
        }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
    }
    function desligarMudo(){
        if($this -> getLigado() == True){
            if($this -> getVolume() == 0){
                $this -> setVolume(5);
            }
            else{
                return 'bagui nao está no mudo'."<br/>";
            }
        }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
    }
    function play(){
        if($this -> getLigado() == True){
        return 'tocando';
    }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
}
    function pause(){
        if($this -> getLigado() == True){
            return 'pausado';
        }
        else{
            return 'liga o bagui primeiro'."<br/>";
        }
    }

    private function getVolume(){
        return $this -> volume;
    }
    private function getLigado(){
        return $this -> ligado;
    }
    private function getTocando(){
        return $this -> tocando;
    }
    private function setVolume($v){
        $this -> volume = $v;
    }
    private function setLigado($l){
        $this -> ligado = $l;
    }
    private function setTocando($t){
        $this -> tocando = $t;
    }
}
?>