<?php


class User {
    public $nome;
    public $cognome;
    public $email;
    public $citta;
    public $eta; 

    function __construct($_nome, $_cognome){
        $this->nome = $_nome;
        $this ->cognome = $_cognome;
        $this ->citta = $_citta;
    }

    public function getName(){
        return $this->nome;
    }

}





 ?>
