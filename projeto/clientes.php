<?php
    require('header.php');
?>
    <h3 class="text-white my-3">Gerenciamento de Clientes</h3>
    <a href="inserir_cliente.php" class="btn btn-outline-light mt-3">Adicionar Cliente</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereco</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarClientes();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['nome']?></td>
                <td><?= $l['telefone']?></td>
                <td><?= $l['endereco']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_cliente.php?id=<?=$l['id']?>" class="btn btn-outline-warning m-2">
                        Alterar
                    </a>
                    <a href="excluir_cliente.php?id=<?=$l['id']?>" class="btn btn-outline-danger m-2">
                        Excluir
                    </a>
                </td>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php
    require('footer.php');
?>