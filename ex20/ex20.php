<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aa</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
<main>
    <?php 
    
    $a = new email();
    
    try{
        $a -> cadastrarEmail('tetinhasgmail.com');
    }
    catch(Exception $e){
        print($e -> getMessage());
    }
    
    ?>
</main>
</body>
</html>