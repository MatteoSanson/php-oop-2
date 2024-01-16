<?php
class Tipologia extends Categoria {
    public $titolo;
    public $scontoTipologia = "/";

    function __construct($tipo, $titolo) {
        parent::__construct($tipo);
        $this->titolo = $titolo;
    }
}
?>