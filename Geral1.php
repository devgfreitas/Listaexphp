<?php

class Geral1 {
    public function calculoSistemaDeCaixa($nomeproduto,$qntdvendida,$precoun,$pdesconto, $pcliente) {
        $valorbruto = $qntdvendida * $precoun;
        $valordesconto = $valorbruto * ($pdesconto / 100);
        $total = $valorbruto - $valordesconto;

        echo "<h2>Resultado: <br>Nome produto: $nomeproduto<br>Valor bruto: $valorbruto<br>Valor do desconto: $valordesconto<br>Total: $total<br></h2>";
        if ($pcliente > $total) {
            $troco = $pcliente - $total;

            echo "<h2>Troco: $troco</h2>";
            } elseif ($pcliente < $total) {
                $valorestante = $total - $pcliente;
                echo "<h2>Valor Restante: $valorestante</h2>";
        } else {
            echo "<h2>Sem trocos ou valores restantes</h2>";
        }
    }
}