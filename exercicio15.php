
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 15</title>
</head>
<body>
    <a href="index.php">Início</a>

    <h1>Exercício 15 - Contratação de Freelancer</h1>

    <p>Uma empresa contrata um profissional para desenvolver um site e precisa calcular o custo do projeto.</p>

    <form method="POST">

        <label>Quantidade de horas de desenvolvimento:</label>
        <input type="number" name="horas" min="0" step="0.01" required><br><br>

        <label>Valor cobrado por hora:</label>
        <input type="number" name="valorhora" min="0" step="0.01" required><br><br>

        <label>Quantidade de páginas:</label>
        <input type="number" name="paginas" min="0" required><br><br>

        <label>Valor adicional por página:</label>
        <input type="number" name="valorpagina" min="0" step="0.01" required><br><br>

        <label>Percentual de entrada (%):</label>
        <input type="number" name="entrada" min="0" max="100" step="0.01" required><br><br>

        <button type="submit">Enviar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $horas = $_POST['horas'];
        $valorhora = $_POST['valorhora'];
        $paginas = $_POST['paginas'];
        $valorpagina = $_POST['valorpagina'];
        $entrada = $_POST['entrada'];

        require_once 'geral15.php';
        $geral = new Geral15();
        $geral->Freelancer($horas, $valorhora, $paginas, $valorpagina, $entrada);
    }

    ?>

</body>
</html>
