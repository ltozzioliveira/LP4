<?php
    require('../cabecalho.php');
?>
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

<?php 
    require ""