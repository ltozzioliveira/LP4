<?php
    $valor = $_POST['value'];
    echo"<h2>$valor fatorial: </h2>";
    $result = 1;
    for($i = 1; $i<=$valor; $i++){
        $result *= $i;
    };
    echo"<p>$result<p/>";
?>