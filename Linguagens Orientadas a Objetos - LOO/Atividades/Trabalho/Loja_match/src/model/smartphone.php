<?php

class smartphone extends produtos
{

    public function __construct(

        string $nome,
        int $preco_base,
        categoria_Eletronico $eletronico,
        public readonly int $quantidade_acessorios,

    ) {

        parent::__construct($nome, $preco_base, $eletronico);
    }


    public function calcularTaxaEnvio(): float
    {
        return $this->quantidade_acessorios * 15.00;
    }
}
