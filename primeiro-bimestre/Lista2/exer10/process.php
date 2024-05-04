<?php 
    $peso = $_POST['peso'];
    $altura =$_POST['altura'];
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
