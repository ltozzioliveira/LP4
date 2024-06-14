<?php
    require_once("header.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirTratamento($_SESSION['id']))
            header('Location: tratamentos.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarTratamentoId($id);
?>

    <h3>Excluir Tratamento</h3>
    <form action="excluir_tratamento.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="id_consulta" class="form-label">Informe a consulta</label>
                <input type="text" class="form-control" name="id_consulta" disabled
                    value="<?= $dados['id_consulta'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $dados['nome'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="custo" class="form-label">Informe o custo</label>
                <input type="text" class="form-control" name="custo" 
                    value="<?= $dados['custo'] ?>" disabled>
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