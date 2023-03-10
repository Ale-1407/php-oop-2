<?php

include_once __DIR__ . './prodotto.php';


class Giocattoli extends Prodotto{
    public $caratteristiche;
    public $dimensioni;

    public function __construct(

        String $immagine,
        String $nome,
        Float $prezzo, 
        Category $category,

        String $caratteristiche,
        String $dimensioni
    ) {
        parent::__construct($immagine,$nome,$prezzo,$category);
        $this->caratteristiche= $caratteristiche;
        $this->dimensioni= $dimensioni;
    }
}

?>