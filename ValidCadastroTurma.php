<?php 
include 'conexao.php';
//var_dump($_POST);
$NomeDaDisc    = $_POST['NomeDaDisciplina'];

$sql = "INSERT INTO turma (nomeDisc) VALUES ('$NomeDaDisc')";
 $res = mysqli_query($conexao,$sql);

 
if(mysqli_affected_rows($conexao) > 0){
    echo "<h2>Materia Cadastrada com sucesso... </h2>";
}else{
    echo "<h2>Ocorreu um erro para cadastrar a Materia... </h2>";
}
?> 
<a href="Turma.php">Voltar</a>

