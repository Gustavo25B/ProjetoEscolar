<header>
<link rel="stylesheet" href="css/ListarAluno.css">
</header>
<table>
<?php 
include 'conexao.php';

$sql = "Select *,a.nome as nomeAluno from aluno a inner join turma t on(a.cod_turma = t.cod_turma)
 inner join professor p on(p.cod_turma = a.cod_turma) order by(a.cod_turma) asc" ;
 $res = mysqli_query($conexao,$sql);
//  print_r($res);
 echo "<h1> Relatorio completo  </h1>";
 echo "<table border = '1'>"; 
 echo "<tr>";
 echo "<td> <b>Codigo turma</b> </td>";
 echo "<td> <b>professor</b> </td>";
 echo "<td> <b>Diciplina</b> </td>";
 echo "<td> <b>Aluno</b> </td>";
 
 echo "</tr>";
 while($row = mysqli_fetch_assoc($res))
  {
  echo "<td>" . $row['cod_turma'] . "</td>";
  echo "<td>" . $row['nome'] . "</td>";
  echo "<td>" . $row['nomeDisc'] . "</td>";
  echo "<td>" . $row['nomeAluno'] . "</td>";
  echo "</tr>";
  }
  echo "</table>" 
?>
<br><br>
</table>
<br><br>
<a clas href="turma.php">Cadastrar turma</a>