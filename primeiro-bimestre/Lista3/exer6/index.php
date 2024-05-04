<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <form action="process.php" method="post">
        <?php 
            for($i =0; $i < 5; $i++) {
                $number = $i+1;
                echo"<h3>Produto $number</h3>";
                echo"<label>Nome: </label>";
                echo'<input type="text" name="names[]">';
                echo'<label> Preço: </label>';
                echo'<input type="number" name="prices[]"><br><br>';
            }
        ?>
        <hr>
        <button type="submit">Enviar</button>
    </form>
    
    
    
</body>
</html>