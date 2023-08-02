<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php 
        include('../ex15/Classer.php');
        $a = new Alluno('miguel', 15, 'M');
        $b = new Funccionaria('jeff', 30, 'M');
        $c = new Proffessor('Jenny', 25, 'F');
        $a -> CancelarMatricula();
        $b -> MudarTrabalho('diretora');
        $b -> ComeçaraTrabalhar();
        $b -> MudarTrabalho('diretora');
        $c -> ReceberAumento(100);
        ?>
    </main>
</body>
</html>