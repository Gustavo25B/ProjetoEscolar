<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="https://www.sistemagestaoescolar.com.br/bravov4/view/assets/images/favicon.ico" />
    <title>Usuario</title>
</head>
<!-- ValidCadastroUsuario.php  -->
<body>
    <div class="navHome" >
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#"><span><img src="img/teste.png" class="logo" width="230px"></span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">home</a>
                    </li>
                    <li class="nav-item" class="tes">
                        <a class="nav-link" href="Aluno.php">Aluno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="professor.php">Professor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Turma.php">Turmas</a>
                    </li> 
                     <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.php">Sair</a>
                  </li> 
            </div>
          </nav>
    </div>
<body class="container-usuario">   
        <div id="Alt_logo">
         </div>
            <div class="Login-CadastroUsuario">
              <form id="loginCadUsuario" action="ValidCadastroUsuario.php" method="POST">
                <div class="mb-3">
                   <label for=""><h2>Cadastro Usuários</h2></label><br><br>
                    <label for="exampleInputEmail1" class="form-label">Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control" aria-describedby="emailHelp" required>
                  </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Senha:</label>
                      <input type="password" id="password" name="password" class="form-control" required>
                      <span class="span-required">Máximo 8 caracteres</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirmar senha:</label>
                        <input type="password" id="passwordtwo" name="passwordtwo" class="form-control" required>
                        <span class="span-required">Máximo 8 caracteres</span>
                      </div>
                    <!-- Buttão -->
                    <input type="submit" class="btn btn-primary" >
                  </form>
                </div>  
<div class="footer" ><br>
        <div class="col-md-12">
        <span style="font-size:1.1em;"><i class="far fa-address-book"></i> <b>INFORMAÇÕES DE CONTATO:</b></span>
        <span style="font-size:0.9em;"><i class="fas fa-phone-square"></i> <b>Telefone:</b> (19) 99999-9999</span>
        <span style="font-size:0.9em;"><i class="fas fa-address-card"></i> <b>Endereço:</b>
          Av. Horácio José Dos Santos, 623, Olhos D'água - Brumado/BA</span>
          <span style="font-size:0.9em;"><i class="fas fa-envelope"></i> <b>E-mail:</b> tecnico@sacws.com.br</span><br>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>
<script>
  /*
var loginCadUsuario = document.querySelector('#loginCadUsuario')

  loginCadUsuario.addEventListener('submit', function(e){
    e.preventDefault();
    var password1    = document.getElementById('password').value;
    var passwordtwo1 = document.getElementById('passwordtwo').value;

    if (password1 == passwordtwo1) {
    alert('Cadastro correto');  
  } else {
    alert('Senhas incorretas');
  }
})
*/
</script>
</body>
</html>