<?php

class Produtos {

    private $id;
    private $nome;
    private $preco;
    private $valor_venda;
    private $cor;

    public function adicionar() {
        include('../Views/Produtos/adicionar.php');
    }

    public function editar() {
        include('../Views/Produtos/editar.php');
    }

    public function visualizar() {
        include('../Views/Produtos/visualizar.php');
    }

    public function deletar() {
        include('../Views/Produtos/deletar.php');
    }
}
