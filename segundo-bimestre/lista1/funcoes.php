<?php

    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }

    function exer1($valor) {
    if ($valor > 0)
        return "Valor positivo";
    elseif ($valor < 0)
        return "Valor negativo";
    else return "Valor é zero";
    }

    function exer2($vetor){
    $menor = $vetor[0];
    $indice = 0;
    for($i = 1; $i < count($vetor); $i++ ) {
        if($menor > $vetor[$i])
            $menor = $vetor[$i];
            $indice = $i;
    }

    return "<h1>Menor número: $menor </h1><br<h1>Índice: $indice </h1>>";
    }