
<?php

class Geral10 {

    public function Internet($consumo, $franquia, $mensalidade, $valorexcedente){

        if($consumo <= $franquia){
            $excedente = 0;
            $adicional = 0;
            echo "<p>Consumo dentro da franquia!</p>";
        } else {
            $excedente = $consumo - $franquia;
            $adicional = $excedente * $valorexcedente;
            echo "<p>Atenção! Consumo acima da franquia!</p>";
        }

        $total = $mensalidade + $adicional;

        // Simulação com consumo 20% maior
        $consumomaior = $consumo * 1.20;

        if($consumomaior > $franquia){
            $excedentemaior = $consumomaior - $franquia;
            $adicionalmaior = $excedentemaior * $valorexcedente;
        } else {
            $excedentemaior = 0;
            $adicionalmaior = 0;
        }

        $totalmaior = $mensalidade + $adicionalmaior;

        echo "<h2>Resultados</h2>";

        echo "Consumo dentro da franquia: " . min($consumo, $franquia) . " GB <br>";
        echo "Quantidade excedente: $excedente GB <br>";
        echo "Valor adicional: R$ " . number_format($adicional, 2, ',', '.') . "<br>";
        echo "Total mensal: R$ " . number_format($total, 2, ',', '.') . "<br>";

        echo "<h3>Simulação com aumento de 20%</h3>";
        echo "Novo consumo: $consumomaior GB <br>";
        echo "Novo total mensal: R$ " . number_format($totalmaior, 2, ',', '.') . "<br>";
    }

}

?>
