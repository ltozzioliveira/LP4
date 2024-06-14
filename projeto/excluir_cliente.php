<?php
    require_once("header.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirCliente($_SESSION['id']))
            header('Location: clientes.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarClienteId($id);
?>

    <h3>Excluir Cliente</h3>
    <form action="excluir_cliente.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?= $dados['telefone'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="endereco" class="form-label">Informe o endereço</label>
                <input type="text" class="form-control" name="endereco" 
                    value="<?= $dados['endereco'] ?>" disabled>
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