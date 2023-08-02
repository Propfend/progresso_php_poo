<?php 
class Tua_Mae{
    Var $bunda;
    var $coxa;
    Var $peito;
    var $gozada;
    var $fodi;
    var $virgem;
    var $t;

    function Fuder(){
        if($this -> gozada == false){
            print"fodi a sua mãe"."<br/>"."<br/>";
            $this -> gozada == True;
        if($this -> t == 0){
            print"sua mãe não é mais virgem"."<br/>";
            $this -> t += 1;
            $this -> gozada == True;
        }
        }
        else{
            print"sua mãe ainda está gozada";
        }
    }

    Function Limpar(){
        if($this -> gozada == True){
            print"sua mae agora está limpa"."<br/>";
        }
        elseif($this -> gozada == False){
            print"sua mãe ja está limpa"."<br/>";
        }
    }
    function How_Many(){
        print"já fodi a sua mãe ".$this -> t; "vezes";
    }

}
?>