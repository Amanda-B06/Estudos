<?php

class armazenamento
{

    public function __construct(

        public readonly string $marcaArmazenamento,
        public readonly float $capacidade,

    ) {}
}
