<?php

require_once '../config/database.php';
require_once 'models/Produtos.php';

class ProdutosController {
    public function adicionar() {
        $produto = new Produtos();

        include 'Views/Produtos/adicionar.php';
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

//arquivo de hosts
// C:\Windows\System32\drivers\etc\hosts
//C:\xampp\apache\conf\extra adiconar -> 127.0.0.1 coimbra.com

//<VirtualHost *:80>
//     ServerAdmin webmaster@dummy-host2.example.com
//     DocumentRoot "C:/xampp/htdocs/produtos/"
//     ServerName coimbra.com
//     ErrorLog "logs/dummy-host2.example.com-error.log"
//     CustomLog "logs/dummy-host2.example.com-access.log" common
// </VirtualHost>