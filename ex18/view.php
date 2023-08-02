<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fofofodase</title>
</head>
<body>
    <?php 
    include('Class.php');
    include('Interface.php');
    Class Vizualização{
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme) {
            $this -> espectador = $espectador;
            $this -> filme = $filme;
            $this -> filme -> setviews($this -> filme -> getviews() + 1);
            $this -> espectador -> settotAssistido($this -> espectador -> settotAssistido() + 1);
        }

        public function avaliar(){

        }
        public function avaliarNota($nota){

        }
        public function avaliarPorc($porc){

        }

        public function getespcectador(){
            return $this -> espectador;
        }

        public function setespectador($e){
            $this -> espectador = $e;
        }

        public function getfilme(){
            return $this -> filme;
        }

        public function setfilme($f){
            $this -> filme = $f;
        }

    }
    ?>
</body>
</html>