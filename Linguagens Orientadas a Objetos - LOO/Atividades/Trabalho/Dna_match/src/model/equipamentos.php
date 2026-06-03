<?php

class equipamentos
{

    public function __construct(

        public readonly string $marca,
        public readonly string $potencia,
        public situacao $situacao,

    ) {}
}
