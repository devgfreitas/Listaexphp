
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 11</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 11 - Gestão de Pedidos</h1>

    <p>Um restaurante precisa calcular o valor de um pedido e conferir se o pagamento está correto.</p>

    <form method="POST">

        <label>Quantidade de pratos:</label>
        <input type="number" name="quantpratos" min="0" required><br><br>

        <label>Preço unitário dos pratos:</label>
        <input type="number" name="precopratos" min="0" step="0.01" required><br><br>

        <label>Quantidade de bebidas:</label>
        <input type="number" name="quantbebidas" min="0" required><br><br>

        <label>Preço unitário das bebidas:</label>
        <input type="number" name="precobebidas" min="0" step="0.01" required><br><br>

        <label>Quantidade de sobremesas:</label>
        <input type="number" name="quantsobremesas" min="0" required><br><br>

        <label>Preço unitário das sobremesas:</label>
        <input type="number" name="precosobremesas" min="0" step="0.01" required><br><br>

        <label>Taxa de serviço (%):</label>
        <input type="number" name="taxaservico" min="0" step="0.01" required><br><br>

        <label>Desconto (%):</label>
        <input type="number" name="desconto" min="0" max="100" step="0.01" required><br><br>

        <label>Valor pago pelo cliente:</label>
        <input type="number" name="valorpago" min="0" step="0.01" required><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $quantpratos = $_POST['quantpratos'];
    $precopratos = $_POST['precopratos'];
    $quantbebidas = $_POST['quantbebidas'];
    $precobebidas = $_POST['precobebidas'];
    $quantsobremesas = $_POST['quantsobremesas'];
    $precosobremesas = $_POST['precosobremesas'];
    $taxaservico = $_POST['taxaservico'];
    $desconto = $_POST['desconto'];
    $valorpago = $_POST['valorpago'];

    require_once 'geral11.php';
    $geral = new Geral11();
    $geral->Restaurante($quantpratos, $precopratos, $quantbebidas, $precobebidas, $quantsobremesas, $precosobremesas, $taxaservico, $desconto, $valorpago);
}

?>
