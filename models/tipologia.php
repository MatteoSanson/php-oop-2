<?php
class Tipologia {
    public $titolo;
    public $sconto = "/";

    function __construct($titolo) {
        $this->titolo = $titolo;
    }
}

function paginaTipologia($tipologia) {
    return "Tipologia: {$tipologia->titolo}<br>Sconto: {$tipologia->sconto}";
}
?>
