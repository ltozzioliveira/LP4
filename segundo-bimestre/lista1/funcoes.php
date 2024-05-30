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

    function exer3($valor1, $valor2){
        if($valor1 == $valor2) {
            $result = ($valor1+$valor2) * 3;
        return "<h1>Valores iguais! Triplo da soma: $result </h1>"; 
        }
        else {
            $result = ($valor1+$valor2);
            return "<h1>Soma: $result<h1/>";
        }
    
    }

    function exer4($value){
        echo"<h1>Tabuada do $value</h1>";
        for($i =0; $i <=10; $i++){
            $result = $value*$i;
            echo"<h3>$value x $i = $result</h3>";
        }
    }

    function exer5($valor){
        echo"<h2>$valor fatorial: </h2>";
        $result = 1;
        for($i = 1; $i<=$valor; $i++){
            $result *= $i;
        };
        echo"<p>$result<p/>";
    }

    function exer6($value1, $value2){
        if($value1 == $value2) echo"<h2>Sequência: $value1</h2>";
        else if($value1 > $value2) echo"<h2>Sequência: $value2, $value1<h2/>";
        else echo"<h2>Sequência: $value1, $value2<h2/>";
    }

    function exer7($value){
        $cent = $value*100;
        echo"<h2>$value em centímetros: $cent centímetros</h2>";
    }

    function exer8($valor){
        if ($valor % 2 != 0){
            $latas = intdiv($valor, 3) + 1;
        } else {
            $latas = $valor / 3;
        }
        $total = $latas*80;
        echo"<h2>Latas necessárias: $latas\nValor total: $total</h2>";
    }

    function exer9($ano){
        $idade = 2024-$ano;
        $dias = $idade * 365;
        $idade2 = 2025-$ano;
        echo"<h2>Idade: $idade anos</h2>";
        echo"<h2>Dias vividos: $dias</h2>";
        echo"<h2>Idade em 2025: $idade2 anos</h2>";
    }

    function exer10($peso, $altura) {
        if($altura >= 100) {
            $imc = $peso / (($altura/100)**2);
        } else {
            $imc = $peso / $altura**2;
        }

        if ($imc < 18.5) $result = "Magreza";
        else if ($imc >= 18.5 && $imc < 25) $result = "Normal";
        else if ($imc >= 25 && $imc < 30) $result = "Sobrepeso";
        else if ($imc >= 30 && $imc < 40) $result = "Obesidade";
        else $result = "Obesidade grave";

        echo"<h2>IMC: $imc</h2>";
        echo"<H2>Nível: $result</H2>";
        echo"<h3>Para mais informações, <a href='https://brasilescola.uol.com.br/educacao-fisica/Indice-massa-corporal-imc.htm'>clique aqui!</a></h3>";

    }