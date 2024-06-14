<?php
    require_once("header.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $id_consulta = $_POST['id_consulta'];
        $nome = $_POST['nome'];
        $custo = $_POST['custo'];
        if($id_consulta != "" && $nome != "" && $custo != ""){
            if(alterarTratamento($id_consulta,$nome,$custo,$_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarTratamentoId($id);
?>

    <h3>Alterar Tratamento</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="id_consulta" class="form-label"> Selecione a consulta</label>
                <select class="form-select" name="id_consulta">
                    <?php
                       $linhas = retornarIdsConsulta();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["id_consulta"])
                            echo "<option selected value='{$l['id']}'>{$l['id']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['id']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="custo" class="form-label">Informe o custo</label>
                <input type="text" class="form-control" name="custo" 
                    value="<?= $dados['custo'] ?>">
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