<?php 

Class Mae
{
    private $cabelo;
    private $cor;
    private $peito;

    function Mae ($cabelo, $cor, $peito = '') {
        $this->$cabelo = $cabelo;
        $this->$cor = $cor;
        $this->peito = $peito;
    }

    public function setCabelo ($cabelo) { 
     
        $this->cabelo = $cabelo;
    } 

    public function getCabelo () {
        return $this->cabelo;
    }

    public function setCor ($cor) {
        $this->cor = $cor;
    }

    public function getCor () {
        return $this -> cor;
    }

    public function setPeito ($peito) {
        $this->peito = $peito;
    }

    public function getPeito () {
        return $this -> peito;
    }
}
?>