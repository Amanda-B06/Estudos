<?php


class geladeira extends produtos
{

    public function __construct(
        string $nome,
        int $preco_base,
        categoria_Eletronico $eletronico,
        public readonly int $quantidade_Garantia,
    ) {
        return parent::__construct($nome, $preco_base, $eletronico);
    }

    public function calcularTaxaEnvio(): float
    {
        return $this->quantidade_Garantia * 50.00;
    }
}
