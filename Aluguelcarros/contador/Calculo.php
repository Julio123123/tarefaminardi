<?php

require_once "index.php";

class Calculo{
    public function calcularValor($quantidadeDias) {
        $valorIntegralDiario = 100;

        if ($quantidadeDias >= 1 && $quantidadeDias <= 3) {
            return $valorIntegralDiario * $quantidadeDias;
        } elseif ($quantidadeDias > 3 && $quantidadeDias <= 6) {
            $valorComDesconto = $valorIntegralDiario * $quantidadeDias * 0.9;
            return $valorComDesconto;
        } elseif ($quantidadeDias > 6) {
            $valorComDesconto = $valorIntegralDiario * $quantidadeDias * 0.85;
            return $valorComDesconto;
        } else {
            return "Quantidade de dias inválida";
        }
    }
}

$calculo = new Calculo();
echo $calculo->calcularValor(2);

?>
