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
    <title>Exercício 7</title>
</head>
<body>
    <header>
        <h1>Controle Financeiro</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Verifique o resultado financeiro:</h1>

        <form method="POST">
            <label for="receitamensal">Receita Mensal:</label>
            <input type="number" step="0.01" name="receitamensal">
            <label for="aluguel">Aluguel:</label>
            <input type="number" step="0.01" name="aluguel">
            <label for="gastosfunc">Gastos com Funcionários:</label>
            <input type="number" step="0.01" name="gastosfunc">
            <label for="energia">Gastos com Energia e Internet:</label>
            <input type="number" step="0.01" name="energia">
            <label for="outrasdesp">Outras Despesas:</label>
            <input type="number" step="0.01" name="outrasdesp">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $receitamensal = $_POST['receitamensal'];
    $aluguel = $_POST['aluguel'];
    $gastosfunc = $_POST['gastosfunc'];
    $energia = $_POST['energia'];
    $outrasdesp = $_POST['outrasdesp'];

    require_once 'Geral7.php';
    $geral = new Geral7();
    $geral->controleFinanceiro($receitamensal, $aluguel, $gastosfunc, $energia, $outrasdesp);
}
?>