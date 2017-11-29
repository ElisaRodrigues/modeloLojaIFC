<?php
require_once __DIR__. '/Conexao.php';

//lógica da 2 aqui
class Produto
{
    public $codigo;
    public $titulo;
    public $preco;
    public $categoria;
    public $conexao;
    public $quantidade_estoque;
    public $estoque;
    public $descricao;

    public function __construct($titulo, $preco, $categoria, $estoque){
        $this->titulo = $titulo;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    public function setQuantidadeEstoque(int $quantidade_estoque)
    {
        $this->quantidade_estoque = $quantidade_estoque;
        $quantidade_estoque = "SELECT quantidade_estoque From tb_produtos";
    }

    public function estaDisponivel(){
     if($this->estoque > 0){
         return "disponivel";
     } else{
         return "o livro não está disponivel no momento";
     }

    }

}