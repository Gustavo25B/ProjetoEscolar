<?php 
include 'conexao.php';

$sql = "Delete from turma where turma.cod_turma = ".$_GET['ID']."" ;
 $res = mysqli_query($conexao,$sql);
 //var_dump($_GET);
 //var_dump($res);
 if($res == true){
    echo "<h1>Turma Deletada</h1>";
 }else{
    echo "<h1>Erro na exclusão da turma</h1>";
 }
?>
<a href="listaTurma.php">Voltar</a>
<br><br>
<a href="Turma.php">Cadastrar turma</a>