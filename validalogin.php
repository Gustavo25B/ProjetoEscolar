<?php
include 'conexao.php';

$usuario = $_POST['username'];
$senha   = $_POST['password'];

echo "$usuario";

$sql =  "select * from usuarios where login  = '$usuario' and senha = '$senha' ";
$buscar = mysqli_query($conexao,$sql);

//echo $total = mysqli_num_rows($buscar);

if(mysqli_num_rows($buscar) > 0){
    header("Location: http://localhost/web/home.php");
}else{ 
    header("Location: http://localhost/web/index.php");
}

?>
