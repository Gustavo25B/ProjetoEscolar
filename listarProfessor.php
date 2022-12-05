<header>
<link rel="stylesheet" href="css/ListarAluno.css">
</header>
<table>
<?php 
include 'conexao.php';

$sql = "Select * from professor" ;
 $res = mysqli_query($conexao,$sql);
 
 echo "<h1> Listagem de professor</h1>";
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
  echo "<td>" . $row['cod_prof'] . "</td>";
  echo "<td width = '250px'>" . $row['nome'] . "</td>";
  echo "<td width = '150px'>" . $row['rg'] . "</td>";
  echo "<td width = '150px'>" . $row['cpf'] . "</td>";
  echo "<td width = '100px'>" .  $row['cod_turma'] . "</td>";
  echo "<td><a href='DeletaProfessor.php?ID=".$row['cod_prof']."'><input type='button'value='Excluir'></td></a>";
  echo "</tr>";
  }
  echo "</table>" 
?>
<br><br>
</table>
<br><br>
<a clas href="professor.php">Cadastrar Professor</a>