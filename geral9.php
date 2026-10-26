
<?php

class Geral9 {

    public function Vendas($nomep, $unidadep, $adicionaluni, $lucrodesejado, $quantvendas){

        $custounitario = $unidadep + $adicionaluni;

        $lucrounitario = $custounitario * $lucrodesejado / 100;

        $precovenda = $custounitario + $lucrounitario;

        $faturamento = $precovenda * $quantvendas;

        $lucroestimado = $lucrounitario * $quantvendas;

        echo "<h2>Resultados</h2>";

        echo "Produto: $nomep <br>";
        echo "Custo unitário: R$ " . number_format($custounitario, 2, ',', '.') . "<br>";
        echo "Preço de venda: R$ " . number_format($precovenda, 2, ',', '.') . "<br>";
        echo "Faturamento estimado: R$ " . number_format($faturamento, 2, ',', '.') . "<br>";
        echo "Lucro estimado: R$ " . number_format($lucroestimado, 2, ',', '.') . "<br>";

        if($lucroestimado > 0){
            echo "<p>Venda com lucro!</p>";
        } else {
            echo "<p>Atenção! Sem lucro na venda.</p>";
        }

    }

}

?>
