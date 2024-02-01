<?php

include('Classe.php');

Class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    function marcarLuta ($l1, $l2) {
        if ($l1 -> getCategoria() == $l2 -> getCategoria() and $l1 != $l2) {
                $this -> setAprovada(True);
                $this -> setDesafiado($l1);
                $this -> setDesafiante($l2);
        }
        else {
            $this -> setAprovada(False);
            $this -> setDesafiado(null);
            $this -> setDesafiante(null);
        }
    }
    function lutar () {
        if ($this -> getAprovada() == True) {
            print $this -> desafiado -> apresesentar();
            print $this -> desafiante -> apresentar();
            $vencedor = rand(0, 2);
            if ($vencedor == 0) {
                print"empate";
                $this -> desafiado -> empatarLuta();
                $this -> desafiante -> empatarLuta();
            }
            if ($vencedor == 1) {
                print"vencedor é ".$this -> desafiado -> getNome();
                $this -> desafiado -> ganharLuta();
                $this -> desafiante -> perderLuta();
            }
            if ($vencedor == 2) {
                print"vencedor é ".$this -> desafiante -> getNome();
                $this -> desafiado -> perderLuta()();
                $this 
                -> desafiante -> ganharLuta();
            }
        } else {
            print"a luta não pode acontecer";
        }
    }
    function getDesafiado(){
        return $this -> desafiado;
    }

    function setDesafiado($desafiado){
        $this -> desafiado = $desafiado;
    }

    function getDesafiante(){
        return $this -> desafiante;
    }

    function setDesafiante($desafiante){
        $this -> desafiante = $desafiante;
    }

    function getRounds(){
        return $this -> rounds;
    }

    function setRounds($rounds){
        $this -> rounds = $rounds;
    }

    function getAprovada(){
        return $this -> aprovada;
    }

    function setAprovada($aprovada){
        $this -> aprovada = $aprovada;
    }

}
?>