
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 10</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 10 - Plano de Internet</h1>

    <p>Uma empresa precisa escolher o plano de internet mais econômico para seu escritório.</p>

    <form method="POST">
        <label>Consumo mensal estimado em GB:</label>
        <input type="number" name="consumo" min="0" step="0.01" required><br><br>

        <label>Franquia do plano em GB:</label>
        <input type="number" name="franquia" min="0" step="0.01" required><br><br>

        <label>Mensalidade:</label>
        <input type="number" name="mensalidade" min="0" step="0.01" required><br><br>

        <label>Valor por GB excedente:</label>
        <input type="number" name="valorexcedente" min="0" step="0.01" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $consumo = $_POST['consumo'];
    $franquia = $_POST['franquia'];
    $mensalidade = $_POST['mensalidade'];
    $valorexcedente = $_POST['valorexcedente'];

    require_once 'geral10.php';
    $geral = new Geral10();
    $geral->Internet($consumo, $franquia, $mensalidade, $valorexcedente);
}

?>
