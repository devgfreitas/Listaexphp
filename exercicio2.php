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
    <title>Exercício 2</title>
</head>
<body>
    <header>
        <h1>Folha de Pagamento</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Calcule o salário do funcionário:</h1>

        <form method="POST">
            <label for="nomefunc">Nome do Funcionário:</label>
            <input type="text" name="nomefunc">
            <label for="valorhora">Valor da Hora Trabalhada:</label>
            <input type="number" step="0.01" name="valorhora">
            <label for="horasnormais">Quantidade de Horas Normais:</label>
            <input type="number" name="horasnormais">
            <label for="horasextras">Quantidade de Horas Extras:</label>
            <input type="number" name="horasextras">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomefunc = $_POST['nomefunc'];
    $valorhora = $_POST['valorhora'];
    $horasnormais = $_POST['horasnormais'];
    $horasextras = $_POST['horasextras'];

    require_once 'Geral2.php';
    $geral = new Geral2();
    $geral->calculoFolhaPagamento($nomefunc, $valorhora, $horasnormais, $horasextras);
}
?>