<?php 

Class Triangulo{

    public function verifica($a, $b, $c){
        if($a == $b and $b == $c){
            print"o triangulo é equilátero";    
        }
        elseif($a == $b and $a != $c or $a == $b and $b != $c or $a == $c and $b != $a or $c == $b and $a != $b){
            print"o triangulo é isósceles";
        }
        elseif($a or $c != $b and $b != $c){
            print"o triangulo é escaleno";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ex21/style copy.css">
</head>
<body>
    <main>
        <main>
            <?php
            
            $a = new Triangulo();
            $a -> verifica(3, 2, 1);
            
            ?>
        </main>
    </main>
</body>
</html>