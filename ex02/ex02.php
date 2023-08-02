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
    include('Class.php');
    $a = new Tua_Mae;
    $a -> bunda = 100;
    $a -> peito = 60;
    $a -> coxa = 70;
    $a -> gozada == False;
    
    print"usando fuder(): "."<br/>"."<br/>";
    $a -> Fuder();
    print"usando limpar(): "."<br/>"."<br/>";
    $a -> Limpar();
    print"usando limpar(): "."<br/>"."<br/>";
    $a -> Limpar();
    print"usando fuder(): "."<br/>"."<br/>";
    $a -> Fuder();
    print"usando limpar()"."<br/>"."<br/>";
    $a -> Limpar()
    ?>
    </main>
</body>
</html>