<?php

class onibus extends veiculo
{

    public function __construct(
        string $marca,
        string $modelo,
        int $ano_fabricacao,
        tipo_combustivel $combustivel,
        public readonly int $quantidade_passageiros,
    ) {
        parent::__construct($marca, $modelo, $ano_fabricacao, $combustivel);
    }


    public function calcularTaxa(): float
    {
        return $this->quantidade_passageiros * 35.00;
    }
}
