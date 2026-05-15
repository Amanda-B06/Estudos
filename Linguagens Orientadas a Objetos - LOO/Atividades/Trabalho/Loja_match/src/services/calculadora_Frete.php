<?php

class calculadora_Frete
{

    private float $total_Frete = 0;

    public function incluir_Calculo(produtos $produtos): void
    {
        $this->total_Frete += $produtos->calcularTaxaEnvio();
    }


    public function getTotal(): float
    {
        return $this->total_Frete;
    }
}
