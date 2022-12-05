<header>
<link rel="stylesheet" href="css/ListarAluno.css">
</header>
<table>
<?php 
include 'conexao.php';

$sql = "Select * from aluno" ;
 $res = mysqli_query($conexao,$sql);
echo "<h1>LISTAGEM DE ALUNOS</h1>";
//  print_r($res);
 echo "<table border = '1'>"; 
 echo "<tr>";
 echo "<td> <b>Codígo</b> </td>";
 echo "<td> <b>NOME</b> </td>";
 echo "<td> <b>RG</b> </td>";
 echo "<td> <b>CPF</b> </td>";
 echo "<td> <b>Cod Turma</b> </td>";
 echo "<td> <b>Click Excluir</b></td>";
 echo "</tr>";
 while($row    = mysqli_fetch_assoc($res))
  {
  echo "<td>" . $row['cod_aluno'] . "</td>";
  echo "<td width = '250px'>" . $row['nome'] . "</td>";
  echo "<td width = '150px'>" . $row['rg'] . "</td>";
  echo "<td width = '150px'>" . $row['cpf'] . "</td>";
  echo "<td width = '100px'>" .  $row['cod_turma'] . "</td>";
  echo "<td><a href='deletaAluno.php?ID=".$row['cod_aluno']."'><input type='button'value='Excluir'></td></a>";
  echo "</tr>";
  }
  echo "</table>" 
?>
<br><br>
</table>
<br><br>
<a clas href="aluno.php">Cadastrar Aluno</a>