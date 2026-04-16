<?php

class Filme
{
    //Atributos: nome: string,   anoLancamento: int,  genero: string
    //nota: array

    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }


    //Metodos
    public function avalia($nota): void
    {
        $this->notas[] = $nota;
    }
    //Vai puxar o valor da nota e alocar no 'avalia''


    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
