<?php

class Geral4 {
    public function comissaoVendas($nomevendedor, $totalvendido, $percentualcomissao, $salariofixo) {
        $comissao = $totalvendido * ($percentualcomissao / 100);
        $bonus = 0;

        if ($totalvendido > 10000) {
            $bonus = 200;
        }

        $salariototal = $salariofixo + $comissao + $bonus;

        echo "<h2>Resultado:<br>Vendedor: $nomevendedor<br>Total vendido: R$ $totalvendido<br>Comissão calculada: R$ $comissao";

        if ($bonus > 0) {
            echo "<br>Bônus concedido: R$ $bonus";
        } else {
            echo "<br>Bônus: nenhum";
        }

        echo "<br>Salário total do funcionário: R$ $salariototal</h2>";
    }
}
?>