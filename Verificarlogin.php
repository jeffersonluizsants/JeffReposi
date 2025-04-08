<?php
session_start();
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $email = $conexao->real_escape_string($email);
    
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario["senha"])) {
            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];

            header("Location: Painel.php");
            exit();
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "E-mail incorreto";
    }

    $conexao->close();
} else {
    echo "Acesso inválido";
}
?>
