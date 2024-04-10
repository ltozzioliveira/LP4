<?php 
    $numeros = $_POST['numeros'];
    $menor = $numeros[0];
    $indice = 0;
    for($i = 1; $i < count($numeros); $i++ ) {
        if($menor > $numeros[$i])
            $menor = $numeros[$i];
            $indice = $i;
    }

    echo"<h1>Menor número: $menor </h1>";
    echo"<h1>Índice: $indice </h1>";
?>