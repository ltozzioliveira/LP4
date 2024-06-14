<?php
    require_once("header.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $idade = $_POST['idade'];
        $id_cliente = $_POST['id_cliente'];
        if($nome != "" && $especie != "" && $idade != "" && $id_cliente != ""){
            if(alterarAnimal($nome,$descricao,$valor,$categoria,$_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarAnimalId($id);
?>

    <h3>Alterar Animal</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="id_cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="id_cliente">
                    <?php
                       $linhas = retornarClientes();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["id_cliente"])
                            echo "<option selected value='{$l['id']}'>{$l['nome']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['nome']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especie" class="form-label">Informe a espécie</label>
                <input type="text" class="form-control" name="especie" value="<?= $dados['especie'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Informe a idade</label>
                <input type="text" class="form-control" name="idade" 
                    value="<?= $dados['idade'] ?>">
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