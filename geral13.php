
<?php

class Geral13 {

    public function Energia($consumo, $preco, $taxa, $multa, $atraso){

        $custoenergia = $consumo * $preco;

        if($atraso == "sim"){
            $valormulta = $multa;
            echo "<p>Atenção! Multa por atraso aplicada.</p>";
        } else {
            $valormulta = 0;
            echo "<p>Pagamento sem atraso!</p>";
        }

        $total = $custoenergia + $taxa + $valormulta;

        // Simulação com redução de 15%
        $consumoreduzido = $consumo * 0.85;

        $custoreduzido = $consumoreduzido * $preco;

        $totalreduzido = $custoreduzido + $taxa + $valormulta;

        $economia = $total - $totalreduzido;

        echo "<h2>Resultados</h2>";

        echo "Custo de energia: R$ " . number_format($custoenergia, 2, ',', '.') . "<br>";

        echo "Taxas adicionais: R$ " . number_format($taxa, 2, ',', '.') . "<br>";

        echo "Multa: R$ " . number_format($valormulta, 2, ',', '.') . "<br>";

        echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";

        echo "<h3>Simulação com redução de 15%</h3>";

        echo "Novo consumo: " . number_format($consumoreduzido, 2, ',', '.') . " kWh <br>";

        echo "Novo valor da conta: R$ " . number_format($totalreduzido, 2, ',', '.') . "<br>";

        echo "Economia estimada: R$ " . number_format($economia, 2, ',', '.') . "<br>";

    }

}

?>
