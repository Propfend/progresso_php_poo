<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style copy.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
        include('Interface.php');
        include('Class.php');
        include('view.php');
        $a = new Video('como fuder');
        $c = new Vizualização($b, $a);
        print_r($c);
        ?>
    </main>
</body>
</html>