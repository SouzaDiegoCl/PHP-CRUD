<!-- Função para listar em uma tabela os dados de todos usuários -->
<table width="500px" class="table table-bordered table-striped table-hover">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>
    <?php
    $query = mysqli_query($conexao, "SELECT * FROM alunos");
    while (
        $exibe = mysqli_fetch_array($query)
    ) {
        $vogal = ($exibe[3] == 'm') ? 'o' : 'a'; /* se exibe[3] for igual a 'M' então a vogal será 'o', caso contrário será 'a' */
        ?>

        <tr>
            <td>
                <b>
                    <?php echo strtoupper($vogal) . " alun$vogal <b>" . $exibe[1] . "</b> mora na cidade de <b>" . $exibe[2] . "</b>" ?>
                </b>
            </td>
            <td><a class="btn btn-primary" href="views/cadstroAtualiza.php?id_aluno=<?php echo $exibe[0] ?>">Editar</a>
            </td>

            <td><a class="btn btn-danger" href="controllers/excluir.php?id_aluno=<?php echo $exibe[0] ?>">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>