<?php

require_once("Musica.php");

class Pop extends musica{
    private $vocal;


    public function __toString()
    {
        $dados = "Pop - Cantor: ". 
        $this->cantor . "- Ano Lancamento: ". 
        $this->anoLancamento .
         " Titulo: " . $this->titulo;
        return $dados;
    }
    /**
     * Get the value of vocal
     */
    public function getVocal()
    {
        return $this->vocal;
    }

    /**
     * Set the value of vocal
     */
    public function setVocal($vocal): self
    {
        $this->vocal = $vocal;

        return $this;
    }
}