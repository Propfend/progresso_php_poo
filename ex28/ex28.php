<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic_Methods</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php 
        $joao = new Pessoa();
        $joao -> __setIdade(40);
        $joao -> getIdade();
        ?>
    </main>
</body>
</html>