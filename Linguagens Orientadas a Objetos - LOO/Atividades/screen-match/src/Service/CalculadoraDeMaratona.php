<?php

class CalculadoraDeMaratona
{

    private int $duracao_Maratona;

    public function include(Titulo $titulo): void
    {
        $this->duracao_Maratona += $titulo->duracao_minutos();
    }


    public function getDuracao()
    {
        return $this->duracao_Maratona;
    }
}
