<?php

abstract class produtos
{


    public function __construct(
        public readonly string $nome,
        public readonly int $preco_base,
        public readonly categoria_Eletronico $eletronico,
    ) {}
    abstract public function calcularTaxaEnvio(): float;
}