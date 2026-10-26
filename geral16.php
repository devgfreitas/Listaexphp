
<?php

class Geral16 {

    public function Inventario($nome, $valorcompra, $percentual, $anos){

        $desvalorizacaoanual = $valorcompra * $percentual / 100;

        $perdaacumulada = $desvalorizacaoanual * $anos;

        // A perda não pode ultrapassar o valor de compra
        if($perdaacumulada > $valorcompra){
            $perdaacumulada = $valorcompra;
        }

        $valorresidual = $valorcompra - $perdaacumulada;

        echo "<h2>Resultados</h2>";

        echo "Equipamento: " . htmlspecialchars($nome) . "<br>";

        echo "Valor de compra: R$ " . number_format($valorcompra, 2, ',', '.') . "<br>";

        echo "Desvalorização por ano: R$ " . number_format($desvalorizacaoanual, 2, ',', '.') . "<br>";

        echo "Perda acumulada: R$ " . number_format($perdaacumulada, 2, ',', '.') . "<br>";

        echo "Valor residual estimado: R$ " . number_format($valorresidual, 2, ',', '.') . "<br>";

        if($perdaacumulada > ($valorcompra * 0.50)){
            echo "<p>Atenção! O equipamento perdeu mais de 50% do valor original!</p>";
        } else {
            echo "<p>O equipamento não perdeu mais de 50% do valor original.</p>";
        }

    }

}

?>
