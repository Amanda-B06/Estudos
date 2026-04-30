 <?php


    abstract class Titulo
    {
        private array $notas;

        public function __construct(
            public readonly string $nome,
            public readonly int $anoLancamento,
            public readonly Genero $genero,
        ) {
            $this->notas = [];
        }


        //Metodos
        public function avaliar(float $nota): void
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

        abstract public function duracao_minutos();
    }
