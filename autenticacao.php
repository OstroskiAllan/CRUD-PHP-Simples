<?php
if (isset($_POST['email']) && isset($_POST['senha'])) {
    
    //Receber os dados do email e da senha
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    require_once("conexao.php");

    $sql = "select * 
            from usuario 
            where email =  '{$email}'";

    $resultado = mysqli_query($conexao, $sql);          //mysqli_query -> Executa a SQL
    $totalDeRegistros = mysqli_num_rows($resultado);    //Retorna o numero de regisros encontrados na consulta do SELECT
    $usuario = mysqli_fetch_array($resultado);          //Carrega o objeto usuario do BD

    if ($totalDeRegistros == 1 &&
            password_verify($senha, $usuario['senha'])){
            //Procede com o login

            //Inicia a sessão se não tiver nenhuma sessão ativa
            if(!isset($_SESSION)){
                session_start();
            }
        
            $_SESSION['id']     = $usuario['id'];
            $_SESSION['nome']   = $usuario['nome'];
            $_SESSION['email']  = $usuario['email'];
            
            header("location: principal.php");
            dia();
        }else{
            $mensagem = "Usuario/Senha inválidos...";
            header("location: index.php?mensagem={$mensagem}");
        }
}