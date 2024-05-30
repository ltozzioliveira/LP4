<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer6/process.php" method="post">
        <label>Valor 1:</label>
        <input type="number" name="value1">
        <label>Valor 2:</label>
        <input type="number" name="value2"><br>
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");