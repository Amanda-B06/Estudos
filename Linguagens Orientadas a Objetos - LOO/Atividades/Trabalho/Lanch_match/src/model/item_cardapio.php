<?php

abstract class item_cardapio {

public function __construct(
    public readonly string $nome_lanche,
    public readonly tamanho_porcao $tamanho,
)
{}

 abstract public function Preco_final(): float;

}