<?php

class Geral7 {
    public function controleFinanceiro($receitamensal, $aluguel, $gastosfunc, $energia, $outrasdesp) {
        $despestotais = $aluguel + $gastosfunc + $energia + $outrasdesp;
        $resultado = $receitamensal - $despestotais;

        if ($resultado >= 0) {
            $situacao = "Lucro";
        } else {
            $situacao = "Prejuízo";
        }

        $margempercentual = 0;
        if ($receitamensal > 0) {
            $margempercentual = ($resultado / $receitamensal) * 100;
        }

        echo "<h2>Resultado:<br>Receita total: R$ $receitamensal<br>Despesas totais: R$ $despestotais<br>$situacao: R$ $resultado<br>Margem de lucro percentual: $margempercentual%</h2>";
    }
}
?>