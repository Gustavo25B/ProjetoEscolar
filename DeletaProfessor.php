<?php 
include 'conexao.php';

$sql = "Delete from professor where professor.cod_prof = ".$_GET['ID']."" ;
 $res = mysqli_query($conexao,$sql);
 //var_dump($_GET);
 //var_dump($res);
 if($res == true){
    echo "<h1>Professor Deletado</h1>";
 }else{
    echo "<h1>Erro na exclusão do Professor</h1>";
 }
?>
<a href="listarProfessor.php">Voltar</a>
<br><br>
<a href="professor.php">Cadastrar Professor</a>