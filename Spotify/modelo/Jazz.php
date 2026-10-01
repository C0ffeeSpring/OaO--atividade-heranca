<?php

require_once("Musica.php");

class Jazz extends Musica {
    private $instrumentoPrincipal;

    public function __toString()
    {
        $dados = "Jazz - Cantor: " . $this->cantor .
                 " - Ano Lançamento: " . $this->anoLancamento .
                 " - Título: " . $this->titulo .
                 " - Instrumento: " . $this->instrumentoPrincipal;
        return $dados;
    }

    public function getInstrumentoPrincipal()
    {
        return $this->instrumentoPrincipal;
    }

    public function setInstrumentoPrincipal($instrumentoPrincipal): self
    {
        $this->instrumentoPrincipal = $instrumentoPrincipal;
        return $this;
    }
}
