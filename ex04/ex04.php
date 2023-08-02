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
        $a = new Carro;
        print"usando acelerar"."<br/>"."<br/>";
        $a -> Acelerar();
        print"usando ligar"."<br/>"."<br/>";
        $a -> Ligar();
        print"usando acelerar"."<br/>"."<br/>";
        $a -> Acelerar();
        print"usando parar"."<br/>"."<br/>";
        $a -> Parar();
        print"usando desacelerar"."<br/>"."<br/>";
        $a -> Desacelerar();
        print"usando ligar"."<br/>"."<br/>";
        $a -> Ligar();
        ?>
    </main>
</body>
</html>