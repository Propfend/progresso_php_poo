<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php
            include('Class.php');
            $a = new Human;
            print"a cor do cabelo é: ".$a -> mostraCabelo()."<br/>"."<br/>";
            print"a buceta é: ".$a -> MostraBuceta()."<br/>"."<br/>";
            print"a cor dos olhos é: ".$a -> MostraOlhos()."<br/>"."<br/>"; 
        ?>
    </main>
</body>
</html>