<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer5/process.php" method="post">
        <label>Valor para fatorar: </label>
        <input type="number" name="value">
        <button type="submit">Enviar</button>
    </form>
<?php
    require("../rodape.php");