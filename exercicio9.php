<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 5</title>
</head>
<body>
    <a href="index.php">Início</a>
    <h1>Situação: Um pequeno empreendedor compra produtos para revender e precisa definir
o preço de venda.</h1>

    <form method="POST">
        <label for="nomep">Informe o nome do produto:</label>
        <input type="text" name="nomep" required><br><br>
        <label for="unidadep">Preço por Unidade:</label>
        <input type="number" name="unidadep" required>
        <label for="adicionaluni">Custo adicional por unidade:</label>
        <input type="number" name="adicionaluni" required>
        <label for="lucrodesejado">Percentual do lucro desejado:</label>
        <input type="number" name="lucrodesejado" required>
        <label for="quantvendas">Quantidade de unidades vendidas:</label>
        <input type="number" name="quantvendas" required>
        <button type="submit">Enviar</button>
    </form>
    

</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomep = $_POST['nomep'];
    $unidadep = $_POST['unidadep'];
    $adicionaluni = $_POST['adicionaluni'];
    $lucrodesejado = $_POST['lucrodesejado'];
    $quantvendas = $_POST['quantvendas'];

    require_once 'geral9.php';
    $geral = new Geral9();
    $geral->Vendas($nomep, $unidadep, $adicionaluni, $lucrodesejado, $quantvendas);
}

?>
