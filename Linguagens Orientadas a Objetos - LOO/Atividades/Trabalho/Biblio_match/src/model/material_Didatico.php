<?php

abstract class material_Didatico
{

    public function __construct(

        public readonly string $titulo,
        public readonly int $ano_Publicado,
        public readonly estado_Conservacao $estado,
    ) {}

    abstract public function calcularEmprestimo(): float;
}
