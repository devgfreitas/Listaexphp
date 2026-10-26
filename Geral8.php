<?php

class Geral8 {
    public function compraMateriais($qtdcadernos, $precocaderno, $qtdcanetas, $precocaneta, $qtdresmas, $precoresma, $orcamento) {
        $custocadernos = $qtdcadernos * $precocaderno;
        $custocanetas = $qtdcanetas * $precocaneta;
        $custoresmas = $qtdresmas * $precoresma;
        $totalcompra = $custocadernos + $custocanetas + $custoresmas;
        $saldo = $orcamento - $totalcompra;
        $percentualexc = 0;

        if ($totalcompra > $orcamento) {
            $percentualexc = (($totalcompra - $orcamento) / $orcamento) * 100;
        }

        echo "<h2>Resultado:<br>Custo dos cadernos: R$ $custocadernos<br>Custo das canetas: R$ $custocanetas<br>Custo das resmas: R$ $custoresmas<br>Valor total da compra: R$ $totalcompra<br>Saldo do orçamento: R$ $saldo";

        if ($percentualexc > 0) {
            echo "<br>Percentual excedido: $percentualexc%";
        }

        echo "</h2>";
    }
}
?>