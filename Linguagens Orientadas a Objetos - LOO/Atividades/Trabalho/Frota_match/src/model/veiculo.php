<?php

abstract class veiculo
{

    public function __construct(
        public readonly string $marca,
        public readonly string $modelo,
        public readonly int $ano_fabricacao,
        public readonly tipo_combustivel $combustivel,
    ) {}

    abstract public function calcularTaxa(): float;
}
