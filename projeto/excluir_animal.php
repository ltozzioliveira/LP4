<?php
    require_once("header.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirAnimal($_SESSION['id']))
            header('Location: animais.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarAnimalId($id);
?>

    <h3>Excluir Animal</h3>
    <form action="excluir_animal.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="id_cliente" class="form-label"> Selecione o dono</label>
                <select class="form-select" name="id_cliente" disabled>
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
                <input type="text" class="form-control" name="especie" value="<?= $dados['especie'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="idade" class="form-label">Informe a idade</label>
                <input type="text" class="form-control" name="idade" 
                    value="<?= $dados['idade'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("footer.php");