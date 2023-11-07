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
    }

    public function visualizar() {
    }

    public function deletar() {
    }
}