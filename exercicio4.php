<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { height: 100vh; background-color: gray; }
        header { background-color: black; display: flex; align-items: center; justify-content: start; height: 80px; }
        header > h1 { color: white; font-size: 35px; margin-right: 100px; margin-left: 20px; }
        main { display: flex; flex-direction: column; background-color: gray; align-items: center; padding: 2%; }
        main > h1 { background-color: white; padding: 2%; border-radius: 15px; margin-bottom: 1%; }
        form { background-color: white; padding: 2%; border-radius: 15px; display: flex; flex-direction: column; }
        form > input { background-color: black; border-radius: 15px; padding: 10px; color: white; }
    </style>
    <title>Exercício 4</title>
</head>
<body>
    <header>
        <h1>Comissão de Vendas</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Calcule o salário do vendedor:</h1>

        <form method="POST">
            <label for="nomevendedor">Nome do Vendedor:</label>
            <input type="text" name="nomevendedor">
            <label for="totalvendido">Total Vendido no Mês:</label>
            <input type="number" step="0.01" name="totalvendido">
            <label for="percentualcomissao">Percentual de Comissão (%):</label>
            <input type="number" step="0.01" name="percentualcomissao">
            <label for="salariofixo">Salário Fixo:</label>
            <input type="number" step="0.01" name="salariofixo">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomevendedor = $_POST['nomevendedor'];
    $totalvendido = $_POST['totalvendido'];
    $percentualcomissao = $_POST['percentualcomissao'];
    $salariofixo = $_POST['salariofixo'];

    require_once 'Geral4.php';
    $geral = new Geral4();
    $geral->comissaoVendas($nomevendedor, $totalvendido, $percentualcomissao, $salariofixo);
}
?>