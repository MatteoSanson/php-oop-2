<?php
class Categoria {
    public $tipo;
    public $sconto;

    function __construct($tipo) {
        $this->tipo = $tipo;
        $this->setSconto();
    }

    public function setSconto() {
        if ($this->tipo === 'Cane') {
            $this->sconto = '8%';
        } elseif ($this->tipo === 'Gatto') {
            $this->sconto = '5%';
        } else {
            $this->sconto = 0;
        }
    }
}

function paginaCategoria() {
    $categoria = new Categoria('Gatto');
    return "Categoria: {$categoria->tipo}<br>Sconto: {$categoria->sconto}";
}
?>