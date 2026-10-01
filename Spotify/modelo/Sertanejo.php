<?php



require_once("Musica.php");

class Sertanejo extends Musica {
    private $dupla; 

    public function __toString()
    {
        $dados = "Sertanejo - Cantor: " . $this->cantor .
                 " - Ano Lançamento: " . $this->anoLancamento .
                 " - Título: " . $this->titulo .
                 " - Dupla: " . $this->dupla;
        return $dados;
    }

    public function getDupla()
    {
        return $this->dupla;
    }

    public function setDupla($dupla): self
    {
        $this->dupla = $dupla;
        return $this;
    }
}
