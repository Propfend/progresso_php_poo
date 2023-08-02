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
    
    Class email{
        public $email;
    
        public function cadastrarEmail($e){
            if(!filter_var($e, FILTER_VALIDATE_EMAIL)){;
                throw new Exception("este email é inválido", 1);
            }
            else{
                $this -> email = $e;
                print"email cadastrado com sucesso";
            }
        }
    
        public function mostrarEmail(){
            print"email cadastrado: ".$this -> email."<br/>";
        }
    }
    
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