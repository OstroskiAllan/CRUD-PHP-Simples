<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
<div class="container pt-3">
        <div class="card bg-light shadow-lg">
            <div class="card-body">
                <h2 class="card-title">Login
                
                </h2>
               
            </div>
        </div>
        <?php if (isset($_GET['mensagem'])): ?>
            <div class="alert alert-warning" role="alert">
                <?= $_GET['mensagem'] ?>
        </div>
        <?php endif ?>
<div class="d-flex justify-content-between">
        
        <form class="w-30 " action="autenticacao.php" method="post">
            <div class="mb-3 pt-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="senha">
            </div>
            <button name="entrar" type="submit" class="btn btn-primary">Entrar</button>

            <a href="./usuario-cadastrar.php" class="btn btn-secondary m-3">
            </i> Cadastrar</a>
        </form>
        <div class="card bg-light mt-3 w-50 shadow-lg">
            <div class="card-body">
                <h2 class="card-title">Informações</h2>
                <p> Contrary to popular belief,Contrary to popular belief, Lorem Ipsum is not simply random text. 
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, 
                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                    consectetur, from a Lorem Ipsum passage.</p>
            </div>
        </div>
        </div>
   
</div>
</body>
<footer>
<div class="card text-center mt-5 ">
        <div class="card-header ">
            Novidades
        </div>
        <div class="card-body">
            <h5 class="card-title">Jeitinho especial de tratar o seus dados</h5>
            <p class="card-text">Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                    consectetur, from a Lorem Ipsum passage..</p>
            <a href="#" class="btn btn-primary">Vai pra algum lugar</a>
        </div>
        <div class="card-footer text-muted">
            11/09/2021
        </div>
    </div>
</footer>
</html>