<?php

class revista_Cientifica extends material_Didatico {

	public function __construct(
        string $titulo, 
        int $ano_Publicado, 
        estado_Conservacao $estado,
        public readonly int $quantidade_Artigos,
        )
    {
        return parent::__construct($titulo, $ano_Publicado, $estado);
    }

    public function calcularEmprestimo(): float
    {
        return $this -> quantidade_Artigos * 2;
    }
}