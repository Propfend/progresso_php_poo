<?php 

Class Construção{
    private $largura;
    private $comporta;
    private $comprimento;


    public function __construct($compr, $l, $compo) {
        $this -> largura = $l;
        $this -> comporta = $compo;
        $this -> comprimento = $compr;
    }


    private function getLargura(){
        return $this -> largura;
    }

    private function setLargura($l){
        $this -> largura = $l;
    }

    private function getComprimento(){
        return $this -> comprimento;
    }

    private function setComprimento($c){
        $this -> comprimento = $c;
    }

    private function getComporta(){
        return $this -> comporta;
    }

    private function setComporta($compo){
        $this -> comporta = $compo;
    }

    public function AumentaLargura($q){
        $this -> setLargura($this -> getLargura() + $q);
    }

    public function AumentaComprimento($qa){
        $this -> setComprimento($this -> getComprimento() + $qa);
    }

    public function AumentaComporta($qaa){
        $this -> setComporta($this -> getComporta() + $qaa);
    }

    public function MostraTudo(){
        
        print"a quantidade de pessoas que a construção comporta é: ".$this -> getComporta()."<br/>"."<br/>";
        print"a largura da casa é: ".$this -> getLargura()."m"."<br/>"."<br/>";
        print"o comprimento da casa é: ".$this -> getComprimento()."m"."<br/>"."<br/>";
        print"a área da casa é de ".($this -> getLargura() * $this -> getComprimento())."m²"."<br/>"."<br/>";
        print"a densidade demográfica da casa é de ≅ ".round(($this -> getLargura() * $this -> getComprimento())/$this -> getComporta())."m²/hab"."<br/>"."<br/>";

    }

}
?>