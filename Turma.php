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
    <script src="JS/main.js"></script>
    <title>Turma</title>
</head>
<body>
    <body class="telalog">   
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
        <h2>Cadastrar Turmas
        </h2>
        <form action="ValidCadastroTurma.php" method="POST" class="formtest">
        <div class="container-Turma">
            <div>
                <label for="formGroupExampleInput" class="form-label">Nome da Disciplina: </label>
                <input type="text" class="form-control" name="NomeDaDisciplina" id="formGroupExampleInput" placeholder="Digite o Nome da Disciplina" max="30">
            </div>              
            <div class="Container-botao">
               <input type="submit" class="btn btn-primary" value="Cadastrar" >
               <input type="button" onclick= "location.href = 'listaTurma.php'" class="btn btn-primary" value="Listar">
               <input type="button" onclick= "location.href = 'Relatorio.php'" class="btn btn-primary" value="Relatorio">
             </div>
        </div>
        </form>

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
</body>
</html>