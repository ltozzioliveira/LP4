<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="process.php" method="post">
        <h3>Informe os nomes e as notas dos alunos:</h3>
        <?php 
            for ($i = 0; $i < 10; $i++){
                <label>Nome: </label>
                <input type="text" name="names[]">
                <label>Nota:</label>
                <input type="number" min=0 max=10 name="grades[]">
                <p/>
            }
        ?>
    </form>
</body>
</html>