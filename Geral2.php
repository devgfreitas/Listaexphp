<?php

class Geral2 {
    public function calculoFolhaPagamento($nomefunc, $valorhora, $horasnormais, $horasextras) {
        $salarionormal = $valorhora * $horasnormais;
        $valorextras = ($valorhora * 1.5) * $horasextras;
        $salariobruto = $salarionormal + $valorextras;

        echo "<h2>Resultado:<br>Funcionário: $nomefunc<br>Salário normal: R$ $salarionormal<br>Valor das horas extras: R$ $valorextras<br>Salário bruto: R$ $salariobruto<br></h2>";

        if ($horasextras > 10) {
            echo "<h2>Atenção: volume elevado de horas extras trabalhadas.</h2>";
        }
    }
}
?>