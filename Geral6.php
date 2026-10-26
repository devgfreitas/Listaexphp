<?php

class Geral6 {
    public function calculoFrete($distancia, $vlrkm, $peso, $taxakg, $valorprodutos) {
        $custodistancia = $distancia * $vlrkm;
        $taxapeso = $peso * $taxakg;
        $frete = $custodistancia + $taxapeso;
        $desconto = 0;

        if ($valorprodutos > 500) {
            $desconto = $frete * 0.5;
            $frete -= $desconto;
        }

        $totalcompra = $valorprodutos + $frete;

        echo "<h2>Resultado:<br>Custo por distância: R$ $custodistancia<br>Taxa por peso: R$ $taxapeso<br>Desconto aplicado: R$ $desconto<br>Valor final do frete: R$ $frete<br>Total da compra com frete: R$ $totalcompra</h2>";
    }
}
?>