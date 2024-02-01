<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Lutador</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php
        include('ControleRemoto.php');
        $leon = new Lutador('Leon', 20, 'brasileiro', 1.75, 11, 1, 3, 80);
        print"usando apresentar(): "."<br/>"."<br/>";
        $leon -> apresentar();
        print"usando empatarLuta(): "."<br/>"."<br/>";
        $leon -> empatarLuta();
        print"usando ganharLuta(): "."<br/>"."<br/>";
        $leon -> ganharLuta();
        print"usando ganharLuta(): "."<br/>"."<br/>";
        $leon -> ganharLuta();
        print"usando apresentar(): "."<br/>"."<br/>";
        $leon -> apresentar();
        print_r($leon);
        ?>
    </main>
</body>
</html>