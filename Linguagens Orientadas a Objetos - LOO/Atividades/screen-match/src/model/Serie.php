<?php

class Serie extends Titulo
{
    public function __construct(
        string $nome,
        int $ano_lancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodios_porTemporada,
        public readonly int $duracao_porEpisodio,
    ) {
        parent::__construct($nome, $ano_lancamento, $genero);
    }

    public function duracao_minutos(): int
    {
        return $this->temporadas * $this->episodios_porTemporada * $this->duracao_porEpisodio;
    }
}
