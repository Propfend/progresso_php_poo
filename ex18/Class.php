<?php
abstract Class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;


    public function __construct($n, $i, $s) {
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
    }

    protected function ganharExp(){
        
    }

    protected function getnome(){
        return $this -> nome;
    }
    protected function setnome($n){
        $this -> nome = $n;
    }
    protected function getidade(){
        return $this -> idade;
    }
    protected function setidade($i){
        $this -> idade = $i;
    }
    protected function getsexo(){
        return $this -> sexo;
    }
    protected function setsexo($s){
        $this -> sexo = $s;
    }
}   

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
    interface AcoesVideo{

        public function Like();
        public function pause();
        public function play();
        
    
    }
    
    Class Video implements AcoesVideo{
    
        public $titulo;
        public $avaliacao;
        public $views;
        public $curtidas;
        public $reproduzindo;
    
        public function __construct($t) {
            $this -> titulo = $t;
            $this -> avaliacao = 1;
            $this -> views = 0;
            $this -> curtidas = 0;
            $this -> reproduzindo = False;
    
        }
    
        public function Like(){
            $this -> curtidas ++;
        }
        public function pause(){
            $this -> reproduzindo = False;
        }
        public function play(){
            $this -> reproduzindo = True;
        }
    }
    
include('Interface.php');
include('Class.php');
include('view.php');
$a = new Video('video');
$b = new Gafanhoto('miguel', 15, 'M');
$c = new Vizualização($b, $a);
$c -> getespcectador();
    
?>