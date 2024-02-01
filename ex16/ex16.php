<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I ll be blind</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <main>
        <?php 
        include('class.php');
        $Reptil = new Reptil(0.5, 1, 5);
        $Ave = new Ave(0.6, 2, 4);
        $Peixe = new Peixe(0.7, 3, 3);
        $Mamifero = new Mamifero(0.4, 4, 5);
        $cachorro = new Cachorro(12, 6, 5);
        $canguru = new Canguru(80, 17, 5);
        print"REPTIL: "."<br/>"."<br/>";
        $Reptil -> alimentar();
        $Reptil -> locomover();
        $Reptil -> fazerSom();
        print"AVE: "."<br/>"."<br/>";
        $Ave ->  alimentar();
        $Ave ->  locomover();
        $Ave ->  fazerSom();
        $Ave -> fazerNinho();
        print"PEIXE: "."<br/>"."<br/>";
        $Peixe -> locomover();
        $Peixe -> fazerSom();
        $Peixe -> soltarBolha();
        $Peixe -> alimentar();
        print"MAMIFERO: "."<br/>"."<br/>";
        $Mamifero -> alimentar();
        $Mamifero -> locomover();
        $Mamifero -> fazerSom();
        print"CACHORRO(MAMiFERo)"."<br/>"."<br/>";
        $cachorro -> alimentar();
        $cachorro -> locomover();
        $cachorro -> fazerSom();
        $cachorro -> EnterrarOsso();
        $cachorro -> abanarORabo();
        print"CANGURU(MAMIFERO)"."<br/>"."<br/>";
        $canguru -> alimentar();
        $canguru -> locomover();
        $canguru -> fazerSom();
        $canguru -> UsarBolsa();
        ?>
    </main>
</body>
</html>