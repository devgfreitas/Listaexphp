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
    <title>Exercício 5</title>
</head>
<body>
    <header>
        <h1>Orçamento de Serviços</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Gere o orçamento do conserto:</h1>

        <form method="POST">
            <label for="nomecliente">Nome do Cliente:</label>
            <input type="text" name="nomecliente">
            <label for="valorpecas">Valor das Peças:</label>
            <input type="number" step="0.01" name="valorpecas">
            <label for="qtdhoras">Quantidade de Horas de Serviço:</label>
            <input type="number" name="qtdhoras">
            <label for="valorhora">Valor Cobrado por Hora:</label>
            <input type="number" step="0.01" name="valorhora">
            <label for="percentualdesconto">Percentual de Desconto (%):</label>
            <input type="number" step="0.01" name="percentualdesconto">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomecliente = $_POST['nomecliente'];
    $valorpecas = $_POST['valorpecas'];
    $qtdhoras = $_POST['qtdhoras'];
    $valorhora = $_POST['valorhora'];
    $percentualdesconto = $_POST['percentualdesconto'];

    require_once 'Geral5.php';
    $geral = new Geral5();
    $geral->orcamentoServicos($nomecliente, $valorpecas, $qtdhoras, $valorhora, $percentualdesconto);
}
?>