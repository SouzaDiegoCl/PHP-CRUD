<?php include("blades/header.php"); ?>

<div class="container bg-white mt-5 p-5 rounded-5 shadow-lg mb-5">
<h3 class="p-3">Cadastrar</h3>
    <form action="../controllers/cadastrar.php" method="post">

        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome">
        <label class="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade"><br>
        <label class="form-label">Sexo</label>
        <input  type="radio" name="alunoSexo" value="m" checked>Masculino
        <input  type="radio" name="alunoSexo" value="f">Feminino<br>

        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>
</div>

<?php include("blades/footer.php"); ?>