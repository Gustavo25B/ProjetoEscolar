<?php 
include 'conexao.php';

$sql = "Delete from aluno where aluno.cod_aluno = ".$_GET['ID']."" ;
 $res = mysqli_query($conexao,$sql);
 //var_dump($_GET);
 //var_dump($res);
 if($res == true){
    echo "<h1>Aluno Deletado</h1>";
 }else{
    echo "<h1>Erro na exclusão do aluno</h1>";
 }
?>
<a href="listaAluno.php">Voltar</a>
<br><br>
<a href="aluno.php">Cadastrar Aluno</a>