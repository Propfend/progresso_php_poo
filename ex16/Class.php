<?php 
Class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    public function __construct($p, $i, $m) {
        $this -> peso = $p;
        $this -> idade = $i;
        $this -> membros = $m;
    }

    public function locomover(){

    }
    public function alimentar(){

    }

    public function fazerSom(){

    }
}
Class Mamifero extends Animal{
    protected $corPelo;

    public function locomover(){
        print"andando"."<br/>"."<br/>";
    }

    public function alimentar(){
        print"mamando"."<br/>"."<br/>";
    }

    public function fazerSom(){
        print"som de mamifero"."<br/>"."<br/>";
}
}

Class Reptil extends Animal{
    protected $corEscama;

    public function locomover(){
        print"arrastando"."<br/>"."<br/>";
    }

    public function alimentar(){
        print"comendo vegetais"."<br/>"."<br/>";
    }

    public function fazerSom()
    {
        print"fazendo som"."<br/>"."<br/>";
    }
}

Class Peixe extends Animal{

    protected $corEscama;

    public function locomover()
    {
        print"nadando"."<br/>"."<br/>";
    }

    public function alimentar(){
        print"comendo substancias"."<br/>"."<br/>";
    }

    public function fazerSom()
    {
        print"peixe nao faz som"."<br/>"."<br/>";
    }

    public function soltarBolha(){
        print"soltando bolha"."<br/>"."<br/>";
    }

}

Class Ave extends Animal{
    protected $corPena;

    public function locomover()
    {
        print"voando"."<br/>"."<br/>";
    }

    public function alimentar()
    {
        print"comendo frutos"."<br/>"."<br/>";
    }

    public function fazerSom()
    {
        print"som de ave"."<br/>"."<br/>";
    }
    public function fazerNinho(){
        print"fazendo ninho"."<br/>"."<br/>";
    }
}

Class Canguru extends Mamifero{
    public function UsarBolsa(){
        print"usando a bolsa"."<br/>"."<br/>";
    }

    public  function locomover(){
        print"Pulando"."<br/>"."<br/>";
    }
}

Class Cachorro extends Mamifero{
    public function abanarORabo(){
        print"abanando o rabo"."<br/>"."<br/>";
    }
    public function EnterrarOsso(){
        print"enterrando osso"."<br/>"."<br/>";
    }

    public function reacao($a){
        if($a == 'ola'){
            print"au au";
        }
    }
    public function reacao($b){
        if($b == 18){
            
        }
    }
    public function reacao($c){

    }

}
?>