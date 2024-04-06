<?php 
    $ano = $_POST['ano'];
    $idade = 2024-$ano;
    $dias = $idade * 365;
    $idade2 = 2025-$ano;
    echo"<h2>Idade: $idade anos</h2>";
    echo"<h2>Dias vividos: $dias</h2>";
    echo"<h2>Idade em 2025: $idade2 anos</h2>";
?>