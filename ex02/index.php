<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tua_Mae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        
            require "Mae.php";

            $minhaMae = new Mae('azul', 'verde',  1.60);

            print($minhaMae->falar('Olá!!'))."<br/>"."<br/>";

            print($minhaMae->andar())."<br/>"."<br/>";

        ?>
    </main>
</body>
</html>