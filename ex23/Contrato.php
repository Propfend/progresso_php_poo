<?php 

Class Contrato
{
    public $nome;
    public $idade;
    public $sexo;
    public $contratado;

    public function __construct($n, $i, $s) {
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
        $this -> contratado = False;
    }

    public function contrata () {
        if ($this -> sexo == 'F' and $this -> idade < 25) {
            $this -> contratado = True;
            print"você foi contratado"."<br/>"."<br/>";
        } else{
            print"unhappily, você nao foi contratado"."<br/>"."<br/>";
        }
    }



}

?>
