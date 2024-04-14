<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="process.php" method="post">
        <?php 
            for($i =0; $i < 20; $i++) {
                echo'<input type="number" name="numbers[]"><br>';
            }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>