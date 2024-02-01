<?php 

Class Funccionaria extends Pessoa{
    private $setor;
    private $trabalhando;

    public function MudarTrabalho($x){
        if($this -> getTrabalhando() == True){
            $this -> setSetor($x);
            print"trabalhando de $x no momento";
        }
        else{
            print 'comece a trabalhar primeiro'."<br/>"."<br/>";
        }
}
    public function ComeçaraTrabalhar(){
        if($this -> getTrabalhando() == True){
            print"você ja esta trabalhando"."<br/>"."<br/>";
        }
        else{
            $this -> setTrabalhando(True);
            print"trabalhando"."<br/>"."<br/>";
        }
    }
    private function getSetor(){
        return $this -> setor;
    }
    private function setSetor($s){
        $this -> setor = $s;
    }
    private function getTrabalhando(){
        return $this -> trabalhando;
    }
    private function setTrabalhando($t){
        $this -> trabalhando = $t;
    }

}