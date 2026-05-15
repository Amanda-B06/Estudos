<?php

class livros extends material_Didatico {

	public function __construct(
        string $titulo, 
        int $ano_Publicado, 
        estado_Conservacao $estado,
        public readonly int $quantidade_Paginas,
        )
    {
        return parent::__construct($titulo, $ano_Publicado, $estado);
    }

    public function calcularEmprestimo(): float
    {
        return $this -> quantidade_Paginas / 50;
    }
}