<?php 

Class SomaDois
{
    public $num1;
    public $num2;

    public function soma ($n1, $n2) {
        $soma = $n1 + $n2;
        if ($soma > 20) {
            $soma += 8;
            print"a soma entre $n1 e $n2 com 8 adicionado é $soma";
        } else {
            $soma -= 5;
            print"a soma entre $n1 e $n2 com 5 subtraído é $soma";
        }
    }

    public function getNum1 () {
        return $this -> num1;
    }

    public function getNum2 () {
        return $this -> num2;
    }
}

?>