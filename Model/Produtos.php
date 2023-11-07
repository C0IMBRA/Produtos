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

    public function index(){
        $query = "SELECT * FROM produtos";
        return $query;
    }

    public function editar() {
    }

    public function visualizar() {
    }

    public function deletar() {
    }
}