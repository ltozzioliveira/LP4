<?php 
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];

    if($value1 == $value2) echo"<h2>Sequência: $value1</h2>";
     else if($value1 > $value2) echo"<h2>Sequência: $value2, $value1<h2/>";
     else echo"<h2>Sequência: $value1, $value2<h2/>";
?>