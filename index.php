<?php include("models/conexao.php");
include("views/blades/header.php"); ?>

<div class="container bg-white mt-5 p-5 rounded-5 shadow-lg mb-5">
    <h1>Sistema Crud</h1>
    <a class="btn btn-success" href="views/cadastro.php">Cadastar</a>
    <hr>

    <form action='index.php' method="post">
        <input class="form-control" type="text" name="buscar" size="25"><input class="btn btn-primary mt-3"
            type="submit" value="Buscar">
    </form>
    <hr>

    <?php

    if (empty($_POST["buscar"])) {
        /*         Para mostrar a tabela completa: */
        include("controllers/listar.php");
        ?>
        <!-- Acaba aqui a tabela completa -->

        <?php
    } else {
        $varBuscar = $_POST["buscar"];
        ?>

        <table width="500px" class="table table-bordered table-striped table-hover">
            <tr>
                <td><b>Nome</b></td>
                <td><b>Editar</b></td>
                <td><b>Excluir</b></td>
            </tr>
            <?php $query = mysqli_query($conexao, "SELECT * from alunos WHERE nome LIKE '%$varBuscar%'");

            while ($exibe = mysqli_fetch_array($query)) {
                $vogal = ($exibe[3] == 'm') ? 'o' : 'a'; /* se exibe[3] for igual a 'M' então a vogal será 'o', caso contrário será 'a' */?>
                <tr>
                    <td><b>
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
    <?php } ?>
</div>
<?php include("views/blades/footer.php"); ?>