
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 16</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 16 - Avaliação de Patrimônio</h1>

    <p>Uma empresa precisa calcular o valor atual de seus equipamentos e estimar a perda de valor ao longo do tempo.</p>

    <form method="POST">

        <label>Nome do equipamento:</label>
        <input type="text" name="nome" required><br><br>

        <label>Valor de compra:</label>
        <input type="number" name="valorcompra" min="0" step="0.01" required><br><br>

        <label>Percentual de desvalorização anual (%):</label>
        <input type="number" name="percentual" min="0" step="0.01" required><br><br>

        <label>Quantidade de anos de uso:</label>
        <input type="number" name="anos" min="0" required><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $valorcompra = $_POST['valorcompra'];
        $percentual = $_POST['percentual'];
        $anos = $_POST['anos'];

        require_once 'geral16.php';
        $geral = new Geral16();
        $geral->Inventario($nome, $valorcompra, $percentual, $anos);
    }

    ?>

</body>
</html>
