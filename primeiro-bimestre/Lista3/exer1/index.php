<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="process.php" method="post">
        <h3>Informe os nomes e as notas dos alunos:</h3>
        <?php 
            for ($i = 0; $i < 10; $i++){
                echo'<label>Nome: </label>';
                echo'<input type="text" name="names[]">';
                echo'<label>Nota:</label>';
                echo'<input type="number" min=0 max=10 name="grades[]">';
                echo'<p/>';
            }
        ?>
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>