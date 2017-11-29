<?php
require_once __DIR__. '/Conexao.php';
require_once __DIR__. '/Produto.php';

    class CrudProdutos{
    private $conexao;
    private $produto;

    public function __construct(){
    $this->conexao = Conexao::getConexao();
    }
        //cadastrar produto - questão 6
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES('$produto->titulo', $produto->preco, '$produto->categoria')";
            $this->conexao->exec($sql);

        }

        public function getProduto(int $codigo){
            $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE codigo = $codigo");
            $produto = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
            return new Produto($produto['nome'], $produto['preco'], $produto['categoria']);
        }

        public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM tb_produtos"); //msm coisa q usar a funcao p pegar td em json
            $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            //FABRICA DE PRODUTOS
            $listaProdutos = [];
            foreach ($arrayProdutos as $produto){
                $listaProdutos[] = new Produto($produto['titulo'], $produto['preco'], $produto['categoria'], $produto['quantidade_estoque']);
            }
            return $listaProdutos;

        }

        //editar produto - questão 7

        //excluir produto - questão 8

}

$x = new CrudProdutos();
$x->getProdutos();