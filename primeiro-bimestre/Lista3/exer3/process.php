<?php 
    if(isset($_POST['numbers']) && isset($_POST['mult'])) {
        $numbers = $_POST['numbers'];
        $mult = $_POST['mult'];
        foreach($numbers as &$value) {
            $result = $mult * $value;
            echo"<h3>$value x $mult = $result</h3>";
        }
    }
?>