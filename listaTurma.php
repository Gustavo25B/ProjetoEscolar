<header>
<link rel="stylesheet" href="css/ListarAluno.css">
</header>
<table>
<?php 
include 'conexao.php';

$sql = "Select * from turma " ;
 $res = mysqli_query($conexao,$sql);
//  print_r($res);
 echo "<h1> Listagem de turmas </h1>";
 echo "<table border = '1'>"; 
 echo "<tr>";
 echo "<td> <b>Codigo</b> </td>";
 echo "<td> <b>Nome da Disciplina</b> </td>";
 echo "</tr>";
 while($row = mysqli_fetch_assoc($res))
  {
  echo "<td>" . $row['cod_turma'] . "</td>";
  echo "<td>" . $row['nomeDisc'] . "</td>";
  echo "<td><a href='Deletaturma.php?ID=".$row['cod_turma']."'><input type='button'value='Excluir'></td></a>";
  echo "</tr>";
  }
  echo "</table>" 
?>
<br><br>
</table>
<br><br>
<a clas href="turma.php">Cadastrar turma</a>