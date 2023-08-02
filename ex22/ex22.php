<?php 

Class analise{

    public $dez;
    public $cinco;
    public $dois;

    public function __construct() {
        $this -> dez = False;
        $this -> cinco = False;
        $this -> dois = False;
    }

    public function analisar($num){
        if($num  % 10 == 0){
            $this -> dez = True;
        }

        if($num  % 5 == 0){
            $this -> cinco = True;
        }

        if($num  % 2 == 0){
            $this -> dois = True;
        }
        print('dez : '.$this -> dez)."<br/>"."<br/>";
        print(' cinco : '.$this -> cinco)."<br/>"."<br/>";
        print(' dois : '.$this -> dois)."<br/>"."<br/>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Never Coming Down</title>
    <link rel="stylesheet" href="../ex21/style copy.css">
</head>
<body>
    <main>
        <?php

        $a = new analise;
        $a -> analisar(10);

        ?>
    </main>
</body>
</html>