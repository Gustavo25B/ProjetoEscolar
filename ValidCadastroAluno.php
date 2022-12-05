<?php 
include 'conexao.php';
//var_dump($_POST);
$nomealuno         = $_POST['nome'];
$datanascimento    = $_POST['datanasc'];
$endaluno          = $_POST['endaluno'];
$rgaluno           = $_POST['Rgaluno'];
$cfpaluno          = $_POST['CpfAluno'];
$sexoAluno         = $_POST['SexoAluno'];
$codTurmaAluno     = $_POST['CodTuma'];

$sql = "INSERT INTO aluno (nome,data_nas,endereco,rg,cpf,sexo,cod_turma) VALUES ('$nomealuno', '$datanascimento',
 '$endaluno','$rgaluno','$cfpaluno','$sexoAluno','$codTurmaAluno')";
 $res = mysqli_query($conexao,$sql);

 
if(mysqli_affected_rows($conexao) > 0){
    echo "<h2>Aluno Cadastrado com Sucesso... </h2>";
}else{
    echo "<h2>Ocorreu um erro para cadastrar o Aluno... </h2>";
}
?> 
<a href="Aluno.php">Voltar</a>

