<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        include('Class.php');

        $novoCarro = new Carro;

        print"usando acelerar"."<br/>"."<br/>";
        
        $novoCarro -> acelerar();

        print"usando ligar"."<br/>"."<br/>";

        $novoCarro -> ligar();

        print"usando acelerar"."<br/>"."<br/>";

        $novoCarro -> acelerar();

        print"usando parar"."<br/>"."<br/>";

        $novoCarro -> parar();

        print"usando desacelerar"."<br/>"."<br/>";

        $novoCarro -> desacelerar();

        print"usando ligar"."<br/>"."<br/>";

        $novoCarro -> ligar();

        ?>
    </main>
</body>
</html>