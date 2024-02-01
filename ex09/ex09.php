<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A_Luta</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
<main>
    <?php
        include_once('Class.php');
        include_once('Classe.php');
    
        $a = new Luta();
        $b = new Lutador('brian', 20, 'estadonidense', 1.80, 10, 5, 3, 80);
        $c = new Lutador('Jerry', 19, 'Brazilian', 1.75, 9, 4, 2, 84);
        print"marcando a luta"."<br/>"."<br/>";
        $a -> marcarLuta($b, $c);
        print"Lutando"."<br/>"."<br/>";
        $a -> lutar($b, $c);
        print"apresentando lutador $c: "."<br/>"."<br/>";
        $c -> apresentar();
        print"apresentar lutador $b: "."<br/>"."<br/>";
        $b -> apresentar();
    ?>
</main>
</body>
</html>