<?php
include 'conexao.php';

$usuario     = $_POST['username'];
$password1    = $_POST['password'];
$passwordtwo1 = $_POST['passwordtwo'];

if($password1 == $passwordtwo1){
    echo " <script>alert('Registrado'); </script>";
    $sql = "INSERT INTO usuarios (login,senha) VALUES ('$usuario','$password1')";
    $resp = mysqli_query($conexao,$sql);
    echo "$resp";
} else {
    echo "<h2>Cadastro incorreto voltar na tela.</h2>";
     
}

?>
<a href="usuario.php">VOLTAR</a>