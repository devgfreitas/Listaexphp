<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background-color: gray;
        }

        header {
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: start;
            height: 80px;
        }

        header > h1 {
            color: white;
            font-size: 35px;
            margin-right: 100px;
            margin-left: 20px;
        }

        main {
            display: flex;
            flex-direction: column;
            background-color: gray;
            align-items: center;
            padding: 2%;    
        }

        main > h1 {
            background-color: white;
            padding: 2%;
            border-radius: 15px;
            margin-bottom: 1%;
        }

        form {
            background-color: white;
            padding: 2%;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
        }

        form > input {
            background-color: black;
            border-radius: 15px;
            padding: 10px;
            color: white;
        }
    </style>
    <title>Exercício 1</title>
</head>
<body>
    <header>
        <h1>Sistema de Caixa</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Registre sua venda:</h1>

        <form method="POST">
            <label for="nomeproduto">Nome do Produto:</label>
            <input type="text" name="nomeproduto">
            <label for="qntdvendida">Quantidade vendida:</label>
            <input type="number" name="qntdvendida">
            <label for="precoun">Preço Unitário:</label>
            <input type="number" name="precoun">
            <label for="pdesconto">Percentual de desconto(%):</label>
            <input type="number" name="pdesconto">
            <label for="pcliente">Valor pago pelo cliente:</label>
            <input type="number" name="pcliente">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomeproduto = $_POST['nomeproduto'];
    $qntdvendida = $_POST['qntdvendida'];
    $precoun = $_POST['precoun'];
    $pdesconto = $_POST['pdesconto'];
    $pcliente = $_POST['pcliente'];

    require_once 'Geral1.php';
    $geral = new Geral1();
    $geral->calculoSistemaDeCaixa($nomeproduto,$qntdvendida,$precoun,$pdesconto, $pcliente);
}