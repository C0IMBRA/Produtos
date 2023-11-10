<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        #botaoAdicionar {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #28a745;
            color: #fff;
            margin-left: 190px;
            text-decoration: none;
            
        }

        #botaoVisualizar {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }

        #botaoEditar {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            background-color: #ffc107;
            color: #000;
            text-decoration: none;
        }

        #botaoExcluir {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
        }

        input[type="submit"]:hover {
            filter: brightness(0.9);
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #d4edda;
        }
    </style>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="http://coimbra.com/produtos/adicionar/" id="botaoAdicionar">Adicionar</a>
    <div style="display:flex;">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cor</th>
                <th>Preço (R$)</th>
                <th>Valor de Venda (R$)</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($result as $info): ?>
                <tr>
                    <td><?php echo $info['id']; ?></td>
                    <td><?php echo $info['nome']; ?></td>
                    <td><?php echo $info['cor']; ?></td>
                    <td><?php echo number_format($info['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo number_format($info['valor_venda'], 2, ',', '.'); ?></td>
                    <td>
                    <a href="http://coimbra.com/produtos/adicionar/" id="botaoVisualizar">Visualizar</a>
                    <a href="http://coimbra.com/produtos/Editar/" id="botaoEditar">Editar</a>
                    <a href="http://coimbra.com/produtos/Deletar/" id="botaoExcluir">Excluir</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
