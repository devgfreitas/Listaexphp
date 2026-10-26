
<?php

class Geral11 {

    public function Restaurante($quantpratos, $precopratos, $quantbebidas, $precobebidas, $quantsobremesas, $precosobremesas, $taxaservico, $desconto, $valorpago){

        $subtotalpratos = $quantpratos * $precopratos;
        $subtotalbebidas = $quantbebidas * $precobebidas;
        $subtotalsobremesas = $quantsobremesas * $precosobremesas;

        $subtotal = $subtotalpratos + $subtotalbebidas + $subtotalsobremesas;

        $valortaxa = $subtotal * $taxaservico / 100;

        $valordesconto = $subtotal * $desconto / 100;

        $total = $subtotal + $valortaxa - $valordesconto;

        echo "<h2>Resultados do Pedido</h2>";

        echo "Subtotal dos pratos: R$ " . number_format($subtotalpratos, 2, ',', '.') . "<br>";
        echo "Subtotal das bebidas: R$ " . number_format($subtotalbebidas, 2, ',', '.') . "<br>";
        echo "Subtotal das sobremesas: R$ " . number_format($subtotalsobremesas, 2, ',', '.') . "<br>";

        echo "Subtotal dos produtos: R$ " . number_format($subtotal, 2, ',', '.') . "<br>";
        echo "Taxa de serviço: R$ " . number_format($valortaxa, 2, ',', '.') . "<br>";
        echo "Desconto: R$ " . number_format($valordesconto, 2, ',', '.') . "<br>";
        echo "Valor total: R$ " . number_format($total, 2, ',', '.') . "<br>";

        if($valorpago > $total){
            $troco = $valorpago - $total;
            echo "<p>Troco: R$ " . number_format($troco, 2, ',', '.') . "</p>";
        } else if($valorpago < $total){
            $restante = $total - $valorpago;
            echo "<p>Valor restante: R$ " . number_format($restante, 2, ',', '.') . "</p>";
        } else {
            echo "<p>Pagamento realizado corretamente! Não há troco.</p>";
        }

    }

}

?>
