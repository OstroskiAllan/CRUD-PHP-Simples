<?php
if (isset($_POST['salvar'])) {

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

require_once("conexao.php");


$sql = "insert into usuario (nome, email, senha) 
        values ('{$nome}', '{$email}' , '{$senha}')";



mysqli_query($conexao, $sql);

mysqli_close($conexao);


$mensagem = "Registro inserido com sucesso.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>  
    <div class="container pt-3">

        <?php if (isset($mensagem)): ?>
            <div class="alert alert-success" role="alert">
                <?= $mensagem ?>
            </div>
        <?php endif ?>

        <div class="card bg-light">
            <div class="card-body">
                <h2 class="card-title">Cadastro de Usuario
                
                </h2>
               
            </div>
        </div>
        <form class="pt-3" method="post"> 
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Ccompleto</label>
                <input name="nome" type="text" class="form-control" id="nome">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="senha">
            </div>
            <button name="salvar" type="submit" class="btn btn-primary">
                <i class="far fa-save"></i> Salvar</button>
        
            <a href="./usuario-listar.php" class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Voltar</a>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>