<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php
        include('Class.php');

        $a = new Construção(30, 30, 5);

        print"<p>mostrando tudo</p>"."<p/>"."<br/>";

        $a -> MostraTudo()."<br/>"."<br/>";

        print"<p>aumentando a comporta</p>"."<br/>"."<br/>";

        $a -> AumentaComporta(2)."<br/>"."<br/>";

        print"<p>mostrando tudo</p>"."<br/>"."<br/>";

        $a -> MostraTudo()."<br/>"."<br/>";

        print"<p>aumentando o comprimento</p>"."<br/>"."<br/>";

        $a -> AumentaComprimento(12)."<br/>"."<br/>";

        print"mostrando tudo"."<br/>"."<br/>";

        $a -> MostraTudo()."<br/>"."<br/>";

        print"aumentando a largura"."<br/>"."<br/>";

        $a -> AumentaLargura(5)."<br/>"."<br/>";

        print"mostrando tudo"."<br/>"."<br/>";
        
        $a -> MostraTudo()."<br/>"."<br/>";

        ?>
    </main>
</body>
</html>