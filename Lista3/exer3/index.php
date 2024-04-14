<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="process.php" method="post">
        <h2>Números:</h2>
        <?php 
            for($i = 0; $i < 10; $i++) {
                echo"<input type='number' name='numbers[]'/><br>";
            }
        ?>
        <hr>
        <h2>Valor da multiplicação: </h2>
        <input type="number" name="mult"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>