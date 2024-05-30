<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer4/process.php" method="post">
        <label>Tabuada do: </label>
        <input type="number" name="value">
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");