<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
<main>
    <?php 
    $a = new Carro;
    $b = new Motorista;
    $b -> nome = 'joao';
    $a -> modelo = 'mercedes';
    $a -> motorista = $b;

        print_r($a);
        print_r($b);
    ?>
    </main>
</body>
</html>