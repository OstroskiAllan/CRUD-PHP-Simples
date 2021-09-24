<?php
require_once("conexao.php");
require_once("verifica-sessao.php");
if(isset($_POST['excluir'])){
    $id = $_POST['id'];
    $sql = "delete from usuario where id = {$id}";

    mysqli_query($conexao, $sql);
   
    
    $mensagem = "Registro excluido com sucesso.";
}

$sql = "select * from usuario";
$resultado = mysqli_query($conexao, $sql);
$qtd = mysqli_num_rows($resultado);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuario</title>

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
            <h2 class="card-title">Listar Usuarios
            
            </h2>
            <p class="card-text"><?= $qtd ?> registos econtrados.</p>  
            <a href="./usuario-cadastrar.php"> 
                <button  type="buttom" class="btn btn-primary">
                    <i class="far fa-plus-square"></i> Cadastrar
                </buttom>
            </a>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        while ($linha = mysqli_fetch_array($resultado)):
        ?>
            <tr>
                <td><?= $linha['id'] ?></td>
                <td><?= $linha['nome'] ?></td>
                <td><?= $linha['email'] ?></td>
                
                <td class="d-flex">
                    <form action="usuario-alterar.php" method="post"> 
                        <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                        <button type="submit" name="alterar" value="alterar" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i></button>
                    </form>
                    
                <form action="usuario-listar.php" method="post" onsubmit="return confirm('Confirma exclusão?')">
                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                    
                    <button type="submit" name="excluir" value="excluir" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i></button>
                </form>
                
                </td>
            </tr>
            
        <?php endwhile ?>

        </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>