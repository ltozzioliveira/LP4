<?php
    require('header.php');
?>
    <h3 class="text-white my-3">Gerenciamento de Animais</h3>
    <a href="inserir_animal.php" class="btn btn-outline-light mt-3">Adicionar Animal</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Idade</th>
                <th>Dono</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarAnimais();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['Nome']?></td>
                <td><?= $l['Espécie']?></td>
                <td><?= $l['Idade']?></td>
                <td><?= $l['Dono']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_animal.php?id=<?=$l['id']?>" class="btn btn-outline-warning m-2">
                        Alterar
                    </a>
                    <a href="excluir_animal.php?id=<?=$l['id']?>" class="btn btn-outline-danger m-2">
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