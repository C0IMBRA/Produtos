<?php

require_once '../Config/database.php';
require_once '../Model/Produtos.php';

//SEMPRE CRIAR A FUNÇÃO DE CONSTRUCT, PARA INICIARLIZAR A CONTROLLER.  

class ProdutosController {
    public $conn;
    public function __construct($conn=null){
        $this->conn = $conn;
        $action = $_GET['action'];
        return $this->{$action}();
    }

    public function index() {
        $produto = new Produtos();
        $query = $produto->index();
        $result = $this->conn->query($query);        
        include('../Views/Produtos/index.php');
    }

    public function adicionar() {
        $produto = new Produtos();
        if(!empty($_POST)){
            $query = $produto->adicionar();
            $result = $this->conn->query($query);
            header("Location: http://coimbra.com/produtos/index/");
            exit;
        }
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
new ProdutosController($conn);