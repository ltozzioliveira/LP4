<?php
    require "../cabecalho.php";
?>

    <form action="/LP4/segundo-bimestre/lista1/exer8/process.php" method="post">
        <label>Tamanho em m²</label>
        <input type="number" name="m2">
        <button type="submit">Enviar</button>
    </form>

<?php
    require("../rodape.php");