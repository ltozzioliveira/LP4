<?php

    if(isset($_POST['names']) && isset($_POST['grades']) {
        $names = $_POST['names'];
        $grades = $_POST['grades'];

        $maior = max($grades);
        $maiorIndex = array_search($$maior, $grades);
        $maiorName = $names[$maiorIndex];

        $mean = array_sum($notas) / count($notas);

        echo"<h2> Maior nota: $maior Aluno: $maiorName </h2>"
        echo"<h2> Média: $mean </h2>"
    })
?>