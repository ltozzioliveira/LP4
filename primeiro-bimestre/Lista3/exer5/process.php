<?php 


    if (isset($_POST['numbers'])) {
        $numbers = $_POST['numbers'];
        $primos = [];
        foreach($numbers as &$value) {
            $primo = true;
            for($i=2; $i < $value; $i++) {
                if($value % $i == 0 || $value == 1 || $value == 01 ){
                    $primo = false;
                    break;
                }
            }
            if($primo == true) {
                array_push($primos, $value);
            }
        }
        echo"<h2>Valores primos: </h2>";
        foreach($primos as &$primo) {
            echo"<p>$primo</p>";
        }
    }
?>