<?php

class Geral5 {
    public function orcamentoServicos($nomecliente, $valorpecas, $qtdhoras, $valorhora, $percentualdesconto) {
        $maodeobra = $qtdhoras * $valorhora;
        $subtotal = $valorpecas + $maodeobra;
        $desconto = $subtotal * ($percentualdesconto / 100);
        $total = $subtotal - $desconto;

        echo "<h2>Resultado:<br>Cliente: $nomecliente<br>Valor das peças: R$ $valorpecas<br>Valor da mão de obra: R$ $maodeobra<br>Valor do desconto: R$ $desconto<br>Total do orçamento: R$ $total<br></h2>";

        if ($total > 1000) {
            echo "<h2>O orçamento ultrapassa R$ 1.000: será necessária a aprovação do cliente.</h2>";
        } else {
            echo "<h2>Não é necessária aprovação adicional do cliente.</h2>";
        }
    }
}
?>