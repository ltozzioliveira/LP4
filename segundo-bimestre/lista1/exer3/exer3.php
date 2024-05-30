<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer3/process.php" method="post">
        <label>Valor 1</label>
        <input type="number" name="value1">
        <label>Valor 2</label>
        <input type="number" name="value2">
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");