<?php 

Class Contrato{
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

    public function contrata(){
        if($this -> sexo == 'F' and $this -> idade < 25){
            $this -> contratado = True;
            print"você foi contratado"."<br/>"."<br/>";
        }

        else{
            print"unhappily, você nao foi contratado"."<br/>"."<br/>";
        }
    }



}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato</title>
    <link rel="stylesheet" href="../ex21/style copy.css">
</head>
<body>
    <main>
        <?php
        
        $a = new Contrato('miguel', 26, 'F');
        $a -> contrata();
        ?>
    </main>
</body>
</html>