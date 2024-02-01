<?php

Class Gafanhoto extends Pessoa{
    protected $login;
    protected $totAssistido;


    public function viuMaisUm(){
        $this -> settotAssistido($this -> gettotAssistido() + 1);
    }
    private function getLogin(){
        return $this -> login;
    }
    private function setLogin($l){
        $this -> login = $l;
    }
    private function gettotAssistido(){
        return $this -> totAssistido;
    }
    private function settotAssistido($t){
        $this -> totAssistido = $t;
    }

    private function setviews($v){
        $this -> totAssistido = $v;
    }

    private function getviews(){
        return $this -> totAssistido;
    }
}