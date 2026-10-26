<?php

class Geral3 {
    public function controleEstoque($nomeproduto, $qtdestoque, $precocusto, $estoqueminimo, $qtdcompra) {
        $valorestoque = $qtdestoque * $precocusto;
        $custoreposicao = $qtdcompra * $precocusto;

        echo "<h2>Resultado:<br>Produto: $nomeproduto<br>Valor do estoque atual: R$ $valorestoque<br></h2>";

        if ($qtdestoque < $estoqueminimo) {
            $qtdrecomendada = $estoqueminimo - $qtdestoque;
            echo "<h2>Situação: estoque abaixo do mínimo.<br>É necessário comprar produtos.<br>Quantidade recomendada para reposição: $qtdrecomendada<br>Custo total da compra informada: R$ $custoreposicao</h2>";
        } else {
            echo "<h2>Situação: estoque dentro do mínimo adequado.<br>Custo total da compra informada: R$ $custoreposicao</h2>";
        }
    }
}
?>