
<?php

class Geral12 {

    public function Produtividade($pecas, $horas, $meta, $valorpeca){

        $produtividade = $pecas / $horas;

        $producaoesperada = $meta * $horas;

        $percentual = ($pecas / $producaoesperada) * 100;

        $pagamento = $pecas * $valorpeca;

        if($percentual >= 120){
            $bonus = $pagamento * 10 / 100;
            echo "<p>Parabéns! Bônus de 10% concedido!</p>";
        } else {
            $bonus = 0;
            echo "<p>Bônus não concedido.</p>";
        }

        $total = $pagamento + $bonus;

        echo "<h2>Resultados</h2>";

        echo "Produtividade por hora: " . number_format($produtividade, 2, ',', '.') . " peças <br>";

        echo "Produção esperada: " . number_format($producaoesperada, 2, ',', '.') . " peças <br>";

        echo "Percentual da meta atingida: " . number_format($percentual, 2, ',', '.') . "% <br>";

        echo "Pagamento variável: R$ " . number_format($pagamento, 2, ',', '.') . "<br>";

        echo "Bônus: R$ " . number_format($bonus, 2, ',', '.') . "<br>";

        echo "Total a receber: R$ " . number_format($total, 2, ',', '.') . "<br>";

        if($percentual >= 100){
            echo "<p>Meta de produção atingida!</p>";
        } else {
            echo "<p>Atenção! Meta não atingida.</p>";
        }

    }

}

?>
