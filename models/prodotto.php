<?php
class Prodotto extends Tipologia {
    public $nome;
    public $prezzo;

    function __construct($nome, $prezzo, $tipo, $titolo) {
        parent::__construct($tipo, $titolo);
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}
?>