<?php

class produtos
{


    public function __construct(
        private string $nome,
        private string $descricao,
        private float $preco,
        private string $imagem,
    ) {}


    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getPrecConversao(): string
    {
        return "R$ " . number_format($this->preco, 2, ',');
    }
}
