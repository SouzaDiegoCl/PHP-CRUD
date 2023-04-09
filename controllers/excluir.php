<?php

$varIdAluno = $_GET["id_aluno"];

include("../models/conexao.php");

mysqli_query($conexao, "DELETE from alunos where id = $varIdAluno");

header("location:../index.php"); ?>