<?php

class Produtos {

    private $id;
    private $nome;
    private $preco;
    private $valor_venda;
    private $cor;

    public function adicionar() {
        return view('Produtos.adicionar');
    }

    public function editar() {
        return view('Produtos.editar');
    }

    public function visualizar() {
        return view('Produtos.visualizar');
    }

    public function deletar() {
        return view('Produtos.deletar');
    }
}
