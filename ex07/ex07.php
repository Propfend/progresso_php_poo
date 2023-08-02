<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsuled_Object</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php 
        include('Controle_Remoto.php');
        $a = new ControleRemoto;
        print"Usando Ligar()"."<br/>"."<br/>";
        $a -> ligar();
        print"Usando maisVolume()"."<br/>"."<br/>";
        $a -> maisVolume();
   
        ?>
    </main>
</body>
</html>