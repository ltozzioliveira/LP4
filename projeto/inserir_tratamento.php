<?php
    require_once("header.php");
?>

    <h3>Inserir Tratamento</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="id_animal" class="form-label"> Selecione o animal</label>
                <select class="form-select" name="id_animal">
                    <?php
                       $linhas = retornarAnimais();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['id']}'>{$l['Nome']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control" name="dia">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">Informe a hora</label>
                <input type="text" class="form-control" name="hora">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>

<?php
    if ($_POST){
        $animal = $_POST['id_animal'];
        $data = $_POST['dia'];
        $hora = $_POST['hora'];
        if($animal != "" && $data != "" && $hora != ""){
            if(inserirConsulta($animal,$data,$hora))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("footer.php");