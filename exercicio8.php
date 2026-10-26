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
    <title>Exercício 8</title>
</head>
<body>
    <header>
        <h1>Compra de Materiais</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Verifique o orçamento da compra:</h1>

        <form method="POST">
            <label for="qtdcadernos">Quantidade de Cadernos:</label>
            <input type="number" name="qtdcadernos">
            <label for="precocaderno">Preço Unitário do Caderno:</label>
            <input type="number" step="0.01" name="precocaderno">
            <label for="qtdcanetas">Quantidade de Canetas:</label>
            <input type="number" name="qtdcanetas">
            <label for="precocaneta">Preço Unitário da Caneta:</label>
            <input type="number" step="0.01" name="precocaneta">
            <label for="qtdresmas">Quantidade de Resmas de Papel:</label>
            <input type="number" name="qtdresmas">
            <label for="precoresma">Preço Unitário da Resma:</label>
            <input type="number" step="0.01" name="precoresma">
            <label for="orcamento">Orçamento Disponível:</label>
            <input type="number" step="0.01" name="orcamento">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $qtdcadernos = $_POST['qtdcadernos'];
    $precocaderno = $_POST['precocaderno'];
    $qtdcanetas = $_POST['qtdcanetas'];
    $precocaneta = $_POST['precocaneta'];
    $qtdresmas = $_POST['qtdresmas'];
    $precoresma = $_POST['precoresma'];
    $orcamento = $_POST['orcamento'];

    require_once 'Geral8.php';
    $geral = new Geral8();
    $geral->compraMateriais($qtdcadernos, $precocaderno, $qtdcanetas, $precocaneta, $qtdresmas, $precoresma, $orcamento);
}
?>