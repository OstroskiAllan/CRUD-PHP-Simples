<?php 
    require_once("verifica-sessao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">All-Sis</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav container">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Principal</a>
            </li>
            <li class="nav-item">
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="usuario-listar.php">Listar</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['nome'] ?>  <i class="fas fa-user"></i>
                </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item" type="button"><i class="fas fa-users-cog"></i> Configurações</button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li> <a href="sair.php"> <button class="dropdown-item" type="button"><i class="fas fa-sign-out-alt"></i> Sair</button></a></li>
                    </ul>
                </div>
            </div>
    </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>