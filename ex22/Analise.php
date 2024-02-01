<?php 

Class Analise
{

    public $dez;
    public $cinco;
    public $dois;

    public function __construct () {
        $this -> dez = False;
        $this -> cinco = False;
        $this -> dois = False;
    }

    public function analisar ($num) {
        if ($num  % 10 == 0) {
            $this -> dez = True;
        } elseif ($num  % 5 == 0) {
            $this -> cinco = True;
        } elseif ($num  % 2 == 0) {
            $this -> dois = True;
        }
        print('dez : '.$this -> dez)."<br/>"."<br/>";
        print(' cinco : '.$this -> cinco)."<br/>"."<br/>";
        print(' dois : '.$this -> dois)."<br/>"."<br/>";
    }
}
?>