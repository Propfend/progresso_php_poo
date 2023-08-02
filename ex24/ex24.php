<?php 

Class Ordena{

    public function ordena($a){
        print"Ordem dada: ".$a;
        print"Ordem crescente: ";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../ex21/style copy.css">
</head>
<body>
    <main>
        <?php
        $a = new Ordena();
        $a -> ordena($array = [1, 2, 3, 4, 5]);
        ?>
    </main>
</body>
</html>