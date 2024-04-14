<?php 
    if(isset($_POST['prices']) && isset($_POST['names'])) {
        $names = $_POST['names'];
        $prices = $_POST['prices'];
        $catA = 0;
        $catB = [];
        $catC = [];
        for($i = 0; $i < sizeof($prices); $i++){
            if($prices[$i] < 50) {
                $catA += 1;
            } else if($prices[$i] >= 50 && $prices[$i] <=100) {
                array_push($catB, $names[$i]);
            } else {
                array_push($catC, $prices[$i]);
            }
        }
        echo"<p>Quantidade de produtos com preço inferior a R$50,00: $catA<hr>";
        echo"<p>Nomes dos produtos com preço entre R$50,00 e R$100,00:";
        foreach($catB as &$nome) {
            echo"<p>$nome</p>";
        }
        echo"<hr>";
        $result = array_sum($catC) / count($catC);
        echo"<p>Média dos preços dos produtos com preço maior que R$100,00: R$$result,00</p>";
        

    }
?>