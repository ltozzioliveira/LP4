<?php 
    $valor1 = $_POST['value1'];
    $valor2 = $_POST['value2'];

    if($valor1 == $valor2) {
        $result = ($valor1+$valor2) * 3;
      echo"<h1>Valores iguais! Triplo da soma: $result </h1>"; 
    }
    else {
        $result = ($valor1+$valor2);
        echo"<h1>Soma: $result<h1/>";
    }
?>