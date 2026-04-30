<?php

class Filme extends Titulo
{
    //Atributos: nome: string,   anoLancamento: int,  genero: string
    //nota: array
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracao_minutos,
    ) {

        parent::__construct($nome, $anoLancamento, $genero);
    }
    public function duracao_minutos(): int
    {
        return $this->duracao_minutos;
    }
}
