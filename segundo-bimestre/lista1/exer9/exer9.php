<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer9/process.php" method="post">
        <label for="">Ano de nascimento: </label>
        <input type="number" name="ano">
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");