<?php 

interface PublicaçaoInterface{
    public function abrir();
    public function fechar();
    public function folhear($r);
    public function avançarPag($a);
    public function voltarPag($b);
}

?>