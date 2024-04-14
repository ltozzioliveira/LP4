<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <form action="process.php" method="post">
        <?php 
            for($i = 1; $i <= 10; $i++) {
                echo"<p>Aluno $i</p>";
                echo"<label>Nome: </label>";
                echo'<input type="text" name="names[]">';
                echo"<label> Nota 1: </label>";
                echo'<input type="number" min=0 max=10 name="grades1[]">';
                echo"<label> Nota 2: </label>";
                echo'<input type="number" min=0 max=10 name="grades2[]"><br>';
            }
        ?>
        <hr>
        <button type="submit">Enviar</button>    
    </form>
    
</body>
</html>