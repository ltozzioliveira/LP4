<?php
    require_once("header.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $animal = $_POST['animal'];
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];
        if($animal != "" && $dia != "" && $hora != ""){
            if(alterarConsulta($animal,$dia,$hora,$_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarConsultaId($id);
?>

    <h3>Alterar Consulta</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="animal" class="form-label"> Selecione o animal</label>
                <select class="form-select" name="animal">
                    <?php
                       $linhas = retornarAnimais();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["id"])
                            echo "<option selected value='{$l['id']}'>{$l['Nome']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['Nome']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control" name="dia" value="<?= $dados['dia'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">Informe a hora</label>
                <input type="text" class="form-control" name="hora" 
                    value="<?= $dados['hora'] ?>">
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
    require_once("footer.php");