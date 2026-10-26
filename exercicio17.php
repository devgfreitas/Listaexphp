
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 17</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 17 - Investimento Empresarial</h1>

    <p>Uma empresa deseja guardar parte de seu faturamento mensal para adquirir novos equipamentos.</p>

    <form method="POST">

        <label>Valor inicial investido:</label>
        <input type="number" name="valorinicial" min="0" step="0.01" required><br><br>

        <label>Aporte mensal:</label>
        <input type="number" name="aporte" min="0" step="0.01" required><br><br>

        <label>Taxa de rendimento mensal (%):</label>
        <input type="number" name="taxa" min="0" step="0.01" required><br><br>

        <label>Quantidade de meses:</label>
        <input type="number" name="meses" min="0" step="1" required><br><br>

        <label>Objetivo financeiro:</label>
        <input type="number" name="objetivo" min="0" step="0.01" required><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $valorinicial = $_POST['valorinicial'];
        $aporte = $_POST['aporte'];
        $taxa = $_POST['taxa'];
        $meses = $_POST['meses'];
        $objetivo = $_POST['objetivo'];

        require_once 'geral17.php';
        $geral = new Geral17();
        $geral->Investimento($valorinicial, $aporte, $taxa, $meses, $objetivo);
    }

    ?>

</body>
</html>
