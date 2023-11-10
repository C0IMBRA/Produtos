<?php
class Produtos {
    public $conn;
    public function adicionar() {

        $nome = $_POST['nome'];
        $cor = $_POST['cor'];
        $valor = $_POST['preco'];
        $valor_venda = $_POST['valor_venda'];
        $query = "INSERT INTO produtos (nome, cor, preco, valor_venda) VALUES ('$nome', '$cor', $valor, $valor_venda)";

        return $query;
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

new Produtos($conn);