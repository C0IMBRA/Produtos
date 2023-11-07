<?php

require_once '../Config/database.php';
require_once '../Model/Produtos.php';

//SEMPRE CRIAR A FUNÇÃO DE CONSTRUCT, PARA INICIARLIZAR A CONTROLLER.  

class ProdutosController {
    public function __construct(){
        $action = $_GET['action'];
        return $this->{$action}();
    }

    public function adicionar() {
        $produto = new Produtos();
        include('../Views/Produtos/adicionar.php');
    }

    public function deletar() {
        $produto = new Produtos();
        include('../Views/Produtos/deletar.php');
    }

    public function visualizar() {
        $produto = new Produtos();
        include('../Views/Produtos/visualizar.php');
    }

    public function editar() {
        $produto = new Produtos();
        include('../Views/Produtos/editar.php');
    }
}
new ProdutosController();