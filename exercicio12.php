
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 12</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 12 - Produtividade</h1>

    <p>Um supervisor precisa calcular a produtividade de um funcionário durante um turno.</p>

    <form method="POST">

        <label>Quantidade de peças produzidas:</label>
        <input type="number" name="pecas" min="0" required><br><br>

        <label>Horas trabalhadas:</label>
        <input type="number" name="horas" min="0.01" step="0.01" required><br><br>

        <label>Meta de produção por hora:</label>
        <input type="number" name="meta" min="0.01" step="0.01" required><br><br>

        <label>Valor pago por peça:</label>
        <input type="number" name="valorpeca" min="0" step="0.01" required><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $pecas = $_POST['pecas'];
        $horas = $_POST['horas'];
        $meta = $_POST['meta'];
        $valorpeca = $_POST['valorpeca'];

        require_once 'geral12.php';
        $geral = new Geral12();
        $geral->Produtividade($pecas, $horas, $meta, $valorpeca);
    }

    ?>

</body>
</html>
