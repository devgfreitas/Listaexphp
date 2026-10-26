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
    <title>Exercício 3</title>
</head>
<body>
    <header>
        <h1>Controle de Estoque</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
        <h1>Verifique o estoque do produto:</h1>

        <form method="POST">
            <label for="nomeproduto">Nome do Produto:</label>
            <input type="text" name="nomeproduto">
            <label for="qtdestoque">Quantidade em Estoque:</label>
            <input type="number" name="qtdestoque">
            <label for="precocusto">Preço de Custo por Unidade:</label>
            <input type="number" step="0.01" name="precocusto">
            <label for="estoqueminimo">Estoque Mínimo Desejado:</label>
            <input type="number" name="estoqueminimo">
            <label for="qtdcompra">Quantidade que Será Comprada:</label>
            <input type="number" name="qtdcompra">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nomeproduto = $_POST['nomeproduto'];
    $qtdestoque = $_POST['qtdestoque'];
    $precocusto = $_POST['precocusto'];
    $estoqueminimo = $_POST['estoqueminimo'];
    $qtdcompra = $_POST['qtdcompra'];

    require_once 'Geral3.php';
    $geral = new Geral3();
    $geral->controleEstoque($nomeproduto, $qtdestoque, $precocusto, $estoqueminimo, $qtdcompra);
}
?>