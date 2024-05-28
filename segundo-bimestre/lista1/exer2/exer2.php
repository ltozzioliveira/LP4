<?php
    require('../cabecalho.php');
?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <form action="/LP4/segundo-bimestre/lista1/exer2/process.php" method="POST">
            <h2>Insira 7 números diferentes:</h2>
            <?php for ($i = 1; $i <= 7; $i++){
                echo '<input type="number" name="numeros[]" required><br>';
            } ?>
            <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>