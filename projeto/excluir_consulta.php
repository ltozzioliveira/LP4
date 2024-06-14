<?php
    require_once("header.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirConsulta($_SESSION['id']))
            header('Location: consultas.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarConsultaId($id);
?>

    <h3>Excluir Consulta</h3>
    <form action="excluir_consulta.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="animal" class="form-label">Informe o animal</label>
                <input type="text" class="form-control" name="animal" disabled
                    value="<?= $dados['animal'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label">Informe o dono</label>
                <input type="text" class="form-control" name="cliente" value="<?= $dados['cliente'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <input type="text" class="form-control" name="dia" 
                    value="<?= $dados['dia'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="hora" class="form-label">Informe a hora</label>
                <input type="text" class="form-control" name="hora" 
                    value="<?= $dados['hora'] ?>" disabled>
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