<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="https://www.sistemagestaoescolar.com.br/bravov4/view/assets/images/favicon.ico" />
    <title>Login</title>
</head>
 <!-- validalogin.php -->
<body class="telalog">   
  <div id="Alt_logo">
    <img src="img/teste.png" class="logo">
   </div>

       <div class="Login-sistema">
        <form class="form-control" id="loginform"  action="validalogin.php" method="POST">
          <div class="mb-3">
             <label for=""><h1>Sistema escolar</h1></label><br><br>
              <label  class="form-label">Usuario</label>
              <input id="username1" name="username" type="text" class="form-control" maxlength="10" placeholder="Digite seu usuário" required>
            </div>
              <div class="mb-3">
                <label class="form-label">Senha</label>
                <input id="password1" name="password" type="password" class="form-control" maxlength="8" placeholder="Digite a senha" requried>
                <span class="span-required"></span>
              </div>
                <input type="Submit" class="btn btn-primary" >
            </form>
          </div>  
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>
<script src="JS/main.js"></script>    
</body>
</html>