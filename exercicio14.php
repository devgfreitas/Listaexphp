
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 14</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 14 - Reembolso de Despesas</h1>

    <p>Um funcionário viajou a trabalho e precisa calcular quanto a empresa deverá reembolsar.</p>

    <form method="POST">

        <label>Distância percorrida em quilômetros:</label>
        <input type="number" name="distancia" min="0" step="0.01" required><br><br>

        <label>Valor de reembolso por quilômetro:</label>
        <input type="number" name="valorkm" min="0" step="0.01" required><br><br>

        <label>Gastos com alimentação:</label>
        <input type="number" name="alimentacao" min="0" step="0.01" required><br><br>

        <label>Gastos com hospedagem:</label>
        <input type="number" name="hospedagem" min="0" step="0.01" required><br><br>

        <label>Outros gastos autorizados:</label>
        <input type="number" name="outrosgastos" min="0" step="0.01" required><br><br>

        <label>Limite máximo de reembolso:</label>
        <input type="number" name="limite" min="0" step="0.01" required><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $distancia = $_POST['distancia'];
        $valorkm = $_POST['valorkm'];
        $alimentacao = $_POST['alimentacao'];
        $hospedagem = $_POST['hospedagem'];
        $outrosgastos = $_POST['outrosgastos'];
        $limite = $_POST['limite'];

        require_once 'geral14.php';
        $geral = new Geral14();
        $geral->Reembolso($distancia, $valorkm, $alimentacao, $hospedagem, $outrosgastos, $limite);
    }

    ?>

</body>
</html>
