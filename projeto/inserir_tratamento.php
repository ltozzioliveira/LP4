<?php
    require_once("header.php");
?>

    <h3>Inserir Tratamento</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="id_consulta" class="form-label"> Selecione a consulta</label>
                <select class="form-select" name="id_consulta">
                    <?php
                       $linhas = retornarIdsConsulta();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['id']}'>{$l['id']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="custo" class="form-label">Informe o custo</label>
                <input type="text" class="form-control" name="custo">
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
        $id_consulta = $_POST['id_consulta'];
        $nome = $_POST['nome'];
        $custo = $_POST['custo'];
        if($id_consulta != "" && $nome != "" && $custo != ""){
            if(inserirTratamento($id_consulta,$nome,$custo))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("footer.php");