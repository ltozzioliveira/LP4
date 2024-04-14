<?php
    $value = $_POST['value'];
    echo"<h1>Tabuada do $value</h1>";
    for($i =0; $i <=10; $i++){
        $result = $value*$i;
        echo"<h3>$value x $i = $result</h3>";
    }
?>