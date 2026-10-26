
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 13</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 13 - Consumo de Energia</h1>

    <p>Um responsável administrativo precisa estimar a conta de energia elétrica de uma empresa.</p>

    <form method="POST">

        <label>Consumo mensal em kWh:</label>
        <input type="number" name="consumo" min="0" step="0.01" required><br><br>

        <label>Preço por kWh:</label>
        <input type="number" name="preco" min="0" step="0.01" required><br><br>

        <label>Taxa de iluminação ou cobrança adicional:</label>
        <input type="number" name="taxa" min="0" step="0.01" required><br><br>

        <label>Valor da multa por atraso:</label>
        <input type="number" name="multa" min="0" step="0.01" required><br><br>

        <label>Houve atraso no pagamento?</label>
        <select name="atraso" required>
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
        </select><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $consumo = $_POST['consumo'];
        $preco = $_POST['preco'];
        $taxa = $_POST['taxa'];
        $multa = $_POST['multa'];
        $atraso = $_POST['atraso'];

        require_once 'geral13.php';
        $geral = new Geral13();
        $geral->Energia($consumo, $preco, $taxa, $multa, $atraso);
    }

    ?>

</body>
</html>
