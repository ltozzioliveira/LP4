<?php
    if(isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];
        $negatives = 0;
        $positives = 0;
        $neutral = 0;
        $evens = 0;
        $odds = 0;
        foreach($numbers as &$value) {
            if($value < 0) {
                $negatives += 1;
            } else if ($value > 0) {
                $positives += 1;
            } else {
                $neutral += 1;
            }
            if($value % 2 != 0) {
                $odds += 1;
            } else {
                $evens += 1;
            }
        }

        echo"<h2>Números negativos: $negatives</h2>";
        echo"<h2>Números positivos: $positives</h2>";
        echo"<h2>Números neutros: $neutral</h2>";
        echo"<h2>Números pares: $evens</h2>";
        echo"<h2>Números ímpares: $odds</h2>";
    }