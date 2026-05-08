<?php

class calculadora_IPVA
{

    private float $total_Impostos = 0;

    public function incluirNo_Calculo(veiculo $veiculo): void
    {
        $this->total_Impostos += $veiculo->calcularTaxa();
    }


    public function getTotal(): float
    {
        return $this->total_Impostos;
    }
}
