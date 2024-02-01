<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
</head>
<body>
    <pre>
        <?php
        include('Livror.php');
        include('Pessoar.php');
        $a = new Pessoa('Shein', 20, 'Masculino');
        $b = new Livro('A Volta Dos Que Não Foram', 'Shine', 200, $a);
        print_r($b);
        ?>
    </pre>
</body>
</html>