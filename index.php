<?php
class Movie
{
    public $nome;
    public $genere;
    public $durata;
    public $lingua;
    function __construct(string $_nome, string $_genere, int $_durata, string $_lingua)
    {
        $this->nome = $_nome;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->lingua = $_lingua;
    }
}

$Film = new Movie('Fast and furious', 'azione', 141,'Inglese');
$Film_1 = new Movie('The Plane', 'azione', 107, 'Inglese');

var_dump($Film, $Film_1);
?>