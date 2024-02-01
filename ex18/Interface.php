<?php 

Class Video implements AcoesVideo
{

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
?>