<?php

class calculadora_emprestimo{

    private float $total_Emprestimo = 0;

    public function incluir_Calculo(material_Didatico $material): void
    {
        $this->total_Emprestimo += $material->calcularEmprestimo();
    }


    public function getTotal(): float
    {
        return $this->total_Emprestimo;
    }
}
