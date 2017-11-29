<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $preco;
    public $categoria;
    //estoque

    public function __construct($nome, $preco, $categoria){ //estoque
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    public function estaDisponivel(){
        // o estqoeu for maior que zero retorna disponivel
        return "teste estoque";
    }

}
