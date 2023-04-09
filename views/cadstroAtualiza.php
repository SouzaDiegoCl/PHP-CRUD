<?php include("../models/conexao.php");  include("blades/header.php"); 

$varIdAluno = $_GET["id_aluno"];
$query = mysqli_query($conexao, "SELECT * FROM alunos where id = $varIdAluno");
while ($exibe = mysqli_fetch_array($query)) {
    ?>

    <div class="container bg-white mt-5 p-5 rounded-5 shadow-lg mb-5"><!--  -->
        <h3 class="p-3">Atualizar</h3>
         <form action="../controllers/atualizar.php" method="post">
            <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
             <label class="form-label">Nome</label>
            <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>">
            <label class="form-label">Cidade</label>
            <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>">
            <br>

            <label class="form-label">Sexo:</label>
            <input type="radio" name="alunoSexo" value="m" <?php echo ($exibe[3] == 'm') ? 'checked' : "" ?>>Masculino
            <input type="radio" name="alunoSexo" value="f" <?php echo ($exibe[3] == 'f') ? 'checked' : "" ?>>Feminino
            <br>
            <input class="btn btn-success mt-3" type="submit" value="Atualizar">
        </form>
    </div>
    <?php
}
include("blades/footer.php"); ?>