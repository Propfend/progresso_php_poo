<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOlimorfismo</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php
        include('Class.php');
        $a = new Homem('roxo', 'marrom');
        $a -> falar();
        $a -> discutir();
        $a -> MostraCabelo();
        $a -> MostraOlhos();
        $a -> AlteraCabelo('amarelo');
        $a -> AlteraOlhos('azul');
        ?>
    </main>
</body>
</html>