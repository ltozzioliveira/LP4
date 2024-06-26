<?php
    require('header.php');
?>
    <h3 class="text-white my-3">Gerenciamento de Consultas</h3>
    <a href="inserir_consulta.php" class="btn btn-outline-light mt-3">Adicionar Consulta</a>

    <table class="mt-3 table table-hover table-striped text-white table-dark">
        <thead>
            <tr>
                <th>Animal</th>
                <th>Dono</th>
                <th>Dia</th>
                <th>Hora</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornaConsultas();
                while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['animal']?></td>
                <td><?= $l['dono']?></td>
                <td><?= $l['dia']?></td>
                <td><?= $l['hora']?></td>
                <td class="d-flex justify-content-end">
                    <a href="alterar_consulta.php?id=<?=$l['id']?>" class="btn btn-outline-warning m-2">
                        Alterar
                    </a>
                    <a href="excluir_consulta.php?id=<?=$l['id']?>" class="btn btn-outline-danger m-2">
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