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
    <title>Exercício 6</title>
</head>
<body>
    <header>
        <h1>Cálculo de Frete</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Calcule o frete da entrega:</h1>

        <form method="POST">
            <label for="distancia">Distância da Entrega (km):</label>
            <input type="number" step="0.01" name="distancia">
            <label for="vlrkm">Valor Cobrado por Quilômetro:</label>
            <input type="number" step="0.01" name="vlrkm">
            <label for="peso">Peso da Mercadoria (kg):</label>
            <input type="number" step="0.01" name="peso">
            <label for="taxakg">Taxa Adicional por Quilograma:</label>
            <input type="number" step="0.01" name="taxakg">
            <label for="valorprodutos">Valor dos Produtos Transportados:</label>
            <input type="number" step="0.01" name="valorprodutos">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $distancia = $_POST['distancia'];
    $vlrkm = $_POST['vlrkm'];
    $peso = $_POST['peso'];
    $taxakg = $_POST['taxakg'];
    $valorprodutos = $_POST['valorprodutos'];

    require_once 'Geral6.php';
    $geral = new Geral6();
    $geral->calculoFrete($distancia, $vlrkm, $peso, $taxakg, $valorprodutos);
}
?>