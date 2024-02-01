<?php 

Class Agenda
{
    public $cpf;
    public $nome;
    public $endereço;
    public $estadocivil;
    public $inscriçãoestadual;
    public $razãosocial;


    public function getcpf () {
        return $this -> cpf;
    }
    
    public function setcpf ($cpf) {
        $this -> cpf = $cpf;
    }

    public function getnome () {
        return $this -> nome;
    }

    public function setnome ($nome) {
        $this -> nome = $nome;
    }

    public function getendereço () {
        return $this -> endereço;
    }

    public function setendereço ($endereço) {
        $this -> endereço = $endereço;
    }

    public function getestadocivil () { 
        return $this -> estadocivil;
    }

    public function setestadocivil ($estado) {
        $this -> estadocivil = $estado;
    }

    public function getinscriçãoestadual () { 
        return $this -> inscriçãoestadual;
    }

    public function setinscriçãoestadual ($inscri) {
        $this -> inscriçãoestadual = $inscri;
    }

    public function getrazãosocial () {
        return $this -> razãosocial;
    }

    public function setrazãosocial ($razao) 
        $this -> razãosocial = $razao;
    }
}

?>