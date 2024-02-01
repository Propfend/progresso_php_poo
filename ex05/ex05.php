<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco_Conta</title>
</head>
<body>
    <?php 
    include('Class.php');
    $a = new Conta();
    $b = new Conta();
    $a -> abrirConta('CC');
    $b -> abrirConta('CP');
    $a -> setDono('tua_mae');
    $b -> setDono('teu_pai');
    $a -> setnumConta(001);
    $b -> setnumConta(002);

    $a -> depositar(200);
    $b -> depositar(200);

    $a -> sacar(60);
    $b -> sacar(70);

    $a -> pagarMensal();
    $b -> pagarMensal();

    $a -> sacar(178);
    $b -> sacar(260);

    $a -> sacar(178);
    $b -> sacar(260);

    print_r($a);
    print""."<br/>"."<br/>";
    print_r($b);
    
    ?>
</body>
</html>