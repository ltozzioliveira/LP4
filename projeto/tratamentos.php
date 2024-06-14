<?php
    require('header.php');
?>
    <h3 class="text-white my-3">Gerenciamento de Tratamentos</h3>
    <a href="inserir_tratamento.php" class="btn btn-outline-light mt-3">Adicionar Tratamento</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Consulta</th>
                <th>Nome</th>
                <th>Custo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornaTratamentos();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['id_consulta']?></td>
                <td><?= $l['nome']?></td>
                <td><?= $l['custo']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_tratamento.php?id=<?=$l['id']?>" class="btn btn-outline-warning m-2">
                        Alterar
                    </a>
                    <a href="excluir_tratamento.php?id=<?=$l['id']?>" class="btn btn-outline-danger m-2">
                        Excluir
                    </a>
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