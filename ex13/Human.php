<?php 

Class Human{
    const Olhos = 2;
    const Cabelo = 'castanho';
    const Buceta = 'peluda';

    function MostraOlhos () { 
        print self::Olhos;
    }

    function mostraCabelo () {
        print self::Cabelo;
    }

    function MostraBuceta () {
        print self::Buceta;
    }

}

?>