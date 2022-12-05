<?php 
include 'conexao.php';
//var_dump($_POST);
$nomeProf          = $_POST['nome'];
$datanascimento    = $_POST['dataNas'];
$endProf           = $_POST['Endereco'];
$rgProf            = $_POST['rgProf'];
$cpfProf           = $_POST['CPFProf'];
$sexoProf          = $_POST['SexoProf'];
$codTurmaProf      = $_POST['CodTurmaProf'];

$sql = "INSERT INTO professor (nome,data_nas,endereco,rg,cpf,sexo,cod_turma) VALUES ('$nomeProf', '$datanascimento',
 '$endProf','$rgProf','$cpfProf','$sexoProf','$codTurmaProf')";
 $res = mysqli_query($conexao,$sql);


if(mysqli_affected_rows($conexao) > 0){
    echo "<h2>Professor Cadastrado com sucesso.... </h2>";
}else{
    echo "<h2>Ocorreu um erro para cadastrar o Professor... </h2>";
}
?> 
<a href="professor.php">Voltar</a>

