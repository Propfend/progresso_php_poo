<?php 
Class Lutador{

    private $nome;
    private $nacionalidade;
    private $altura;
    private $idade;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($no, $id, $na, $al, $vi, $de, $em, $pe){
        $this->setNome($no);
        $this->setIdade($id);
        $this->setNacionalidade($na);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    function apresentar () {
        print "NOME:".$this -> getNome()."<br/>"."<br/>";
        print "idade:".$this -> getIdade()."<br/>"."<br/>";
        print "nacionalidade: ".$this -> getNacionalidade()."<br/>"."<br/>";
        print "altura:".$this -> getAltura()."<br/>"."<br/>";
        print "peso: ".$this -> getPeso()."<br/>"."<br/>";
        print "categoria".$this -> getCategoria()."<br/>"."<br/>";
        print "vitorias: ".$this -> getVitorias()."<br/>"."<br/>";
        print "empates: ".$this -> getEmpates()."<br/>"."<br/>";
        print "derrotas: ".$this -> getDerrotas()."<br/>"."<br/>";
    }

    
    function ganharLuta () {
        $this -> setVitorias($this -> getVitorias() + 1);
        print "luta ganha"."<br/>"."<br/>";
    }

    function perderLuta () {
        $this -> setDerrotas($this -> getDerrotas() + 1);
        print "luta perdida"."<br/>"."<br/>";
    }

    function empatarLuta () {
        $this -> setEmpates($this -> getEmpates() + 1);
        print "luta empatada"."<br/>"."<br/>";
    }

    function getNome () {
        return $this -> nome;
    }

    function setNome ($no) {
        $this -> nome = $no;
    }

    function getNacionalidade () {
        return $this -> nacionalidade;
    }

    function setNacionalidade ($na) {
        $this -> nacionalidade = $na;
    }

    function getAltura () {
        return $this -> altura;
    }

    function setAltura ($a) {
        $this -> altura = $a;
    }
    
    function getIdade () {
        return $this -> idade;
    }
    
    function setIdade ($i) {  
        $this -> idade = $i;
    }
    
    function getPeso (){ 
        return $this -> peso;
    }
    
    function setPeso ($p) {
        $this -> peso = $p;
        if ($this -> getPeso() < 52.2) {
            $this -> setCategoria('inválido');
        } else {
            if ($this -> getPeso() <= 70.3) {
                $this -> setCategoria('leve');
            }
            if ($this -> getPeso() <= 83.9) {
                $this -> setCategoria('média');
            }
            if ($this -> getPeso() <= 120 ) {
                $this -> setCategoria('pesado');
            }
            if ($this -> getPeso() > 120) {
                $this -> setCategoria('inválido');
            }
        }
    }

    function getCategoria () {
        return $this -> categoria;
    }

    function setCategoria( $c) {
        $this -> categoria = $c;
    }

    function getVitorias () {
        return $this -> vitorias;
    }

    function setVitorias ($v) {
        $this -> vitorias = $v;
    }

    function getDerrotas () {
        return $this -> derrotas;
    }

    function setDerrotas ($d) {
        $this -> derrotas = $d;
    }

    function getEmpates () {
        return $this -> empates;
    }
     
    function setEmpates ($e) {
        $this -> empates = $e;
    }
}
?>
