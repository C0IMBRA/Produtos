<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de produtos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cor</th>
            <th>Preço</th>
            <th>Valor de Venda</th>
        </tr>
        <?php foreach ($result as $info){ ?>
            <tr>
                <td><?php echo $info['id']; ?></td>
                <td><?php echo $info['nome']; ?></td>
                <td><?php echo $info['cor']; ?></td>
                <td><?php echo number_format($info['preco'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($info['valor_venda'], 2, ',', '.'); ?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>
