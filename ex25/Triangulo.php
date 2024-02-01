<?php 

Class Triangulo{

    public function verifica ($a, $b, $c) {
        if($a == $b and $b == $c){
            print"o triangulo é equilátero";    
        } elseif($a == $b and $a != $c or $a == $b and $b != $c or $a == $c and $b != $a or $c == $b and $a != $b){
            print"o triangulo é isósceles";
        } elseif($a or $c != $b and $b != $c){
            print"o triangulo é escaleno";
        }
    }
}

?>