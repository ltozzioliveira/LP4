<?php 
    $months = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
    if(isset($_POST['number'])) {
        $month = $months[$_POST['number']-1];
        
        echo"<h2>Mês selecionado: $month</h2>";
    }
?>