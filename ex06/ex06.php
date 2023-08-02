<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style copy.css">
</head>
<body>
    <?php 
    $email = $_REQUEST['email'] ?? 'email123@gmail.com';
    $senha = $_REQUEST['senha'] ?? 123123123;
    $nome = $_REQUEST['nome'] ?? 'Garibaldo';
    ?>
    <main>
        <section>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="nome">digite o seu nome: </label>
                <input type="text" name="nome" id="idnome" value="<?=$nome?>">
                <label for="email">digite o seu e-mail: </label>
                <input type="text" name="email" id="idemail" value="<?=$email?>">
                <label for="senha">digite a sua senha: </label>
                <input type="text" name="senha" id="idsenha" value="<?=$senha?>">
                <input type="submit" value="enviar">
            </form>
        </section>
        <section id="resultado">
            <?php 
            print"bem vindo(a),$nome!!"
            ?>
        </section>
    </main>
</body>
</html>