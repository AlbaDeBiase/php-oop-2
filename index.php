<?php


class User {
    public $nome;
    public $cognome;
    public $email;
    public $eta;

    function __construct($_nome, $_cognome, $_email){
        $this->nome = $_nome;
        $this ->cognome = $_cognome;
        $this ->email = $_email;

    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this ->cognome;
    }

    public function getEmail(){
        return $this ->email;
    }

    public function printNome(){
        echo $this ->nome;
    }

    public function printCognome(){
        echo $this ->nome;
    }


    public function printEmail(){
        echo $this ->email;
    }

}
// creo un'istanza con classe User

$Utente1 = new User('Mario', 'Rossi', 'mar');

// stampo il nome dell'istanza creata
echo '<h1> Nome User "$Utente1":' . $Utente1->getNome() . '</h1>';
// stampo il cognome dell'istanza creata
echo '<h1> Cognome User "$Utente1":' . $Utente1->getCognome() . '</h1>';

echo '<h1> email User "$Utente1":' . $Utente1->getEmail() . '</h1>';




 ?>
