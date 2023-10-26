<?php

require_once 'config/conexao.php';
require_once 'models/Produtos.php';

class ProdutosController {
    public function adicionar() {
        $produto = new Produtos();
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
