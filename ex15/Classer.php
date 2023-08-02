<?php 
abstract Class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

    public function FazAniversario(){
        $this -> setIdade($this -> getIdade() + 1);

    }

    public function __construct($n, $i, $s) {
        $this -> nome = $n;
        $this -> idade = $i;
        $this -> sexo = $s;
    }

    protected function getNome(){
        return $this -> nome;
    }
    protected function setNome($n){
        $this -> nome = $n;
    }
    protected function getIdade(){
        return $this -> idade;
    }
    protected function setIdade($i){
        $this -> idade = $i;
    }
    protected function getSexo(){
        return $this -> sexo;
    }
    protected function setSexo($s){
        $this -> sexo = $s;
    }
}

Class Alluno extends Pessoa{
    private $matricula;
    private $curso;

    public function CancelarMatricula(){
        if($this -> getMatricula() == False){
            print "a matricula ja esta cancelada"."<br/>"."<br/>";
        }
        else{
            $this -> setMatricula(False);
            print "matricula cancelada"."<br/>"."<br/>";
        }

    }

    private function getCurso(){
        return $this -> curso;
    }
    private function setCurso($c){
        $this -> curso = $c;
    }
    private function getMatricula(){
        return $this -> matricula;
    }
    private function setMatricula($m){
        $this -> matricula = $m;
    }
}

Class Proffessor extends Pessoa{
    private $especialidade;
    private $salario;

    public function ReceberAumento($a){
        $this -> setSalario($this -> getSalario() + $a);
    }
    private function getEspecialidade(){
        return $this -> especialidade;
    }
    private function setEspecialidade($e){
        $this -> especialidade = $e;
    }
    private function getSalario(){
        return $this -> salario;
    }
    private function setSalario($s){
        $this -> salario = $s;
    }
}

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

?>