<?php
    require('../cabecalho.php')
?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="/segundo-bimestre/lista1/exer1/process.php" method="POST">
        <label>informe o valor</label>
        <input type="number" name="valor">
        <button type="submit">Enviar</button>
    </form>