<?php
    
    Class Email
    {
        public $email;
    
        public function cadastrarEmail ($e) {
            if(!filter_var($e, FILTER_VALIDATE_EMAIL)){;
                throw new Exception("este email é inválido", 1);
            } else{
                $this -> email = $e;
                print"email cadastrado com sucesso";
            }
        }
    
        public function mostrarEmail () {
            print"email cadastrado: ".$this -> email."<br/>";
        }
    }
    
    
    
    
    ?>