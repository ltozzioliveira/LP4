<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="process.php" method="post">
        <h2>Números:</h2>
        <?php 
            for ($i = 0; $i < 10; $i++) {
                echo"<input type='number' name='numbers[]'></input>";
                echo"<p/>";
            }
        ?>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>