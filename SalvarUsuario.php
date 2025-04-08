<?php
include "conexao.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);
    

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    

    $nome = $conexao->real_escape_string($nome);
    $email = $conexao->real_escape_string($email);
    $senha = $conexao->real_escape_string($senhaHash);

    echo "Email recebido: $email";


    $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome','$email','$senhaHash')";

    if($conexao->query($sql) === TRUE){
        echo "Usuario adicionado!";
    }else{
        echo "Erro ao cadastrar".$conexao->error;
    }

    $conexao->close();
} else{
    echo "Acesso inválido";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> <a href="Login.php"> Ir para o Login</a></p>
        </body>
</html>