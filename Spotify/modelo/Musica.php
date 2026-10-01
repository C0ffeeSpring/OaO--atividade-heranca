<?php

class Musica{
    protected $cantor;
    protected $anoLancamento;
    protected $titulo;

    


    public function __construct($cantor, $anoLancamento, $titulo) {
        $this->cantor = $cantor;
        $this->anoLancamento = $anoLancamento;
        $this->titulo = $titulo;
    }
    /**
     * Get the value of cantor
     */
    public function getCantor()
    {
        return $this->cantor;
    }

    /**
     * Set the value of cantor
     */
    public function setCantor($cantor): self
    {
        $this->cantor = $cantor;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     */
    public function setAnoLancamento($anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }
}