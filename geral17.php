
<?php

class Geral17 {

    public function Investimento($valorinicial, $aporte, $taxa, $meses, $objetivo){

        $saldo = $valorinicial;

        $taxadecimal = $taxa / 100;

        $totalaportes = $aporte * $meses;

        for($i = 1; $i <= $meses; $i++){

            $rendimento = $saldo * $taxadecimal;

            $saldo = $saldo + $rendimento;

            $saldo = $saldo + $aporte;

        }

        $totalinvestido = $valorinicial + $totalaportes;

        $totalrendimentos = $saldo - $totalinvestido;

        echo "<h2>Resultados</h2>";

        echo "Valor inicial investido: R$ " . number_format($valorinicial, 2, ',', '.') . "<br>";

        echo "Total de aportes realizados: R$ " . number_format($totalaportes, 2, ',', '.') . "<br>";

        echo "Total investido: R$ " . number_format($totalinvestido, 2, ',', '.') . "<br>";

        echo "Saldo final com rendimentos: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

        echo "Total de rendimentos: R$ " . number_format($totalrendimentos, 2, ',', '.') . "<br>";

        if($saldo >= $objetivo){

            $superou = $saldo - $objetivo;

            echo "<p>Parabéns! A meta financeira foi atingida!</p>";

            echo "Valor que superou a meta: R$ " . number_format($superou, 2, ',', '.') . "<br>";

        } else {

            $falta = $objetivo - $saldo;

            echo "<p>Atenção! A meta financeira ainda não foi atingida.</p>";

            echo "Valor que falta para atingir a meta: R$ " . number_format($falta, 2, ',', '.') . "<br>";

        }

    }

}

?>
