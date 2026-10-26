
<?php

class Geral14 {

    public function Reembolso($distancia, $valorkm, $alimentacao, $hospedagem, $outrosgastos, $limite){

        $reembolsokm = $distancia * $valorkm;

        $totaldespesas = $reembolsokm + $alimentacao + $hospedagem + $outrosgastos;

        if($totaldespesas > $limite){
            $valorpermitido = $limite;
            $excedente = $totaldespesas - $limite;

            echo "<p>Atenção! O valor das despesas ultrapassou o limite permitido!</p>";
        } else {
            $valorpermitido = $totaldespesas;
            $excedente = 0;

            echo "<p>Despesas dentro do limite permitido!</p>";
        }

        echo "<h2>Resultados</h2>";

        echo "Reembolso por quilometragem: R$ " . number_format($reembolsokm, 2, ',', '.') . "<br>";

        echo "Gastos com alimentação: R$ " . number_format($alimentacao, 2, ',', '.') . "<br>";

        echo "Gastos com hospedagem: R$ " . number_format($hospedagem, 2, ',', '.') . "<br>";

        echo "Outros gastos: R$ " . number_format($outrosgastos, 2, ',', '.') . "<br>";

        echo "Total das despesas: R$ " . number_format($totaldespesas, 2, ',', '.') . "<br>";

        echo "Valor permitido para reembolso: R$ " . number_format($valorpermitido, 2, ',', '.') . "<br>";

        echo "Valor excedente não reembolsável: R$ " . number_format($excedente, 2, ',', '.') . "<br>";

    }

}

?>
