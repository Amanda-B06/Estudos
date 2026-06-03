<?php

class memoria extends armazenamento
{

    public function __construct(
        public readonly string $modeloMem,
        string $marcaArmazenamento,
        int $capacidade,
    ) {
        parent::__construct($marcaArmazenamento, $capacidade);
    }
}
