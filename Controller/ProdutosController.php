<?php

require_once '../Config/database.php';
require_once '../Model/Produtos.php';

class ProdutosController {
    public function adicionar() {
        $produto = new Produtos();
        $produto->adicionar();
    }
    public function deletar() {
        $produto = new Produtos();
    }

    public function visualizar() {
        $produto = new Produtos();
    }

    public function editar() {
        $produto = new Produtos();
    }
}
