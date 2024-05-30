<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer10/process.php" method="post">
        <label>Peso: </label>
        <input type="number" name="peso">
        <label>Altura em cm: </label>
        <input type="number" name="altura">
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");