<?php

class ProdutoRepositorio
{

    //Atributos da classe ProdutoRepositorio
    public function __construct(
        private PDO $pdo
    ) {
        $this->pdo = $pdo;
    }

    //Métodos da classe ProdutoRepositorio
    public function getOpcoesCafe(): array
    {
        $sql1 = "SELECT * FROM produtos WHERE tipo = 'Café' ORDER BY preco";
        $statement = $this->pdo->query($sql1);
        $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

        $produtosCafe = array_map(function ($cafe) {
            return new produtos(
                $cafe['nome'],
                $cafe['descricao'],
                $cafe['preco'],
                $cafe['imagem']
            );
        }, $produtosCafe);
        return $produtosCafe;
    }

    public function getOpcoesAlmoco(): array
    {
        $sql2 = "SELECT * FROM produtos WHERE tipo = 'Almoço' ORDER BY preco";
        $statement = $this->pdo->query($sql2);
        $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);;

        $produtosAlmoco = array_map(function ($almoco) {
            return new produtos(
                $almoco['nome'],
                $almoco['descricao'],
                $almoco['preco'],
                $almoco['imagem']
            );
        }, $produtosAlmoco);
        return $produtosAlmoco;
    }
}