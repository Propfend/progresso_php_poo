<?php 

include('Class.php');
Class Livro implements PublicaçaoInterface{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($t, $a, $p, Pessoa $l) {
        $this -> titulo = $t;
        $this -> totPaginas = $p;
        $this -> autor = $a;
        $this -> leitor = $l;
    }

    public function abrir(){
        if($this -> getAberto() == False){
            $this -> setAberto(True);
            print"Livro Aberto";
        }
        else{
            print"o livro ja está aberto";
        }
    }
    public function fechar(){
        if($this -> getAberto() == True){
            $this -> setAberto(False);
            print"Livro Fechado";
        }
        else{
            print"o livro já está fechado";
        }
    }
    public function folhear($r){
        if($r > $this -> getTotPaginas()){
            print"o livro não tem tantas paginas assim";
        }
        else{
            $this -> setPagatual($r);
        }
    }
    public function avançarPag($a){
        if(($this -> getPagAtual() + $a) > $this -> getTotPaginas()){
            print"Impossível Avançar Para Uma Página Que Não Existe";
        }
        else{
            $this -> setPagatual($this -> getPagAtual() + $a);
            print"Página Atual: ".$this -> getPagAtual();
        }
    }
    public function voltarPag($b){
        if(($this -> getPagAtual() - $b) < $this -> getTotPaginas()){
            print"Um Livro não Possui Páginas Negativas";
        }
        else{
            $this -> setPagatual($this -> getPagAtual() - $b);
            print"Página Atual: ".$this -> getPagAtual();
        }
    } 
    function detalhes(){

    }
    function getTitulo(){
        return $this -> titulo;
    }
    function setTitulo($t){
        $this -> titulo = $t;
    }

    function getAutor(){
        return $this -> autor;
    }

    function setAutor($A){
        $this -> autor = $A;
    }

    function getTotPaginas(){
        return $this -> totPaginas;
    }

    function setTotPaginas($T){
        $this -> totPaginas = $T;
    }

    function getPagAtual(){
        return $this -> pagAtual;
    }

    function setPagatual($p){
        $this -> pagAtual = $p;
    }

    function getLeitor(){
        return $this -> leitor;
    }

    function setleitor($l){
        return $this -> leitor = $l;
    }

    function getAberto(){
        return $this -> aberto;
    }

    function setAberto($a){
        return $this -> aberto = $a;
    }

}
?>