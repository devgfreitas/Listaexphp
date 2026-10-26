
<?php

class Geral15 {

    public function Freelancer($horas, $valorhora, $paginas, $valorpagina, $entrada){

        $custodesenvolvimento = $horas * $valorhora;

        $custopaginas = $paginas * $valorpagina;

        $total = $custodesenvolvimento + $custopaginas;

        $valorentrada = $total * $entrada / 100;

        $saldo = $total - $valorentrada;

        echo "<h2>Resultados</h2>";

        echo "Custo de desenvolvimento: R$ " . number_format($custodesenvolvimento, 2, ',', '.') . "<br>";

        echo "Custo das páginas: R$ " . number_format($custopaginas, 2, ',', '.') . "<br>";

        echo "Valor total do projeto: R$ " . number_format($total, 2, ',', '.') . "<br>";

        echo "Valor da entrada: R$ " . number_format($valorentrada, 2, ',', '.') . "<br>";

        echo "Saldo restante: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

        if($total > 3000){
            $parcela = $saldo / 3;

            echo "<p>O projeto ultrapassou R$ 3.000,00!</p>";
            echo "<p>O saldo poderá ser dividido em 3 parcelas iguais após a entrada.</p>";
            echo "Valor de cada parcela: R$ " . number_format($parcela, 2, ',', '.') . "<br>";
        } else {
            echo "<p>O projeto não ultrapassou R$ 3.000,00. Parcelamento não disponível.</p>";
        }

    }

}

?>
