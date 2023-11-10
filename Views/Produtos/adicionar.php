<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        if(!empty($_POST)){
            echo '123';
            exit;
        }
    
    ?>
        
    <form action="/produtos/adicionar" method="POST">
        <h2>Adicionar Produto</h2>
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>
        
        <label for="cor">Cor:</label>
        <input type="text" name="cor" required>

        <label for="preco">Preço</label>
        <input type="text" name="preco" required>

        <label for="valor_venda">Valor de venda</label>
        <input type="text" name="valor_venda" required>
        
        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>