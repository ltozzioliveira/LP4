<?php 
    $valor = $_POST['m2'];
    if ($valor % 2 != 0){
        $latas = intdiv($valor, 3) + 1;
    } else {
        $latas = $valor / 3;
    }
    $total = $latas*80;
    echo"<h2>Latas necessárias: $latas\nValor total: $total</h2>"

?>