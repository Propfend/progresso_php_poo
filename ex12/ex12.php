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
        include('Class.php');
        $tereza = new Hétera('loiro', 'morena', 'castanhos');
        print"Usando Faz_sexo()"."<br/>"."<br/>";
        $tereza -> Faz_sexo()."<br/>"."<br/>";
        print"Usando Engravidar()"."<br/>"."<br/>";
        $tereza -> Engravidar()."<br/>"."<br/>";
        print"cor do cabelo: "."<br/>"."<br/>";
        $tereza -> getCabelo();
        print"cor da pele: "."<br/>"."<br/>";
        $tereza -> getPele();
        print"cor dos olhos: "."<br/>"."<br/>";
        $tereza -> getOlhos();

        $jéssica = new Lésbica('preto', 'branca', 'verdes');
        print"Usando Faz_sexo()"."<br/>"."<br/>";
        $jéssica -> Faz_sexo()."<br/>"."<br/>";
        print"Usando Usa_dildo()"."<br/>"."<br/>";
        $jéssica -> Usa_dildo()."<br/>"."<br/>";
        print"cor do cabelo: "."<br/>"."<br/>";
        $jéssica -> getCabelo();
        print"cor da pele: "."<br/>"."<br/>";
        $jéssica -> getPele();
        print"cor dos olhos: "."<br/>"."<br/>";
        $jéssica -> getOlhos();
        ?>
    </main>
</body>
</html>