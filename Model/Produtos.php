<?php

class Produtos {

    private $id;
    private $nome;
    private $preco;
    private $valor_venda;
    private $cor;

    public function adicionar() {
    }

    public function editar() {
    }

    public function visualizar() {
        $sql = "SELECT * FROM produtos WHERE id = 1";
        echo "ID: " . $produto['id'] . "<br>";
        echo "ID: " . $produto['nome'] . "<br>";
    }

    public function deletar() {
    }
}
