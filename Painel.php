<?php
session_start();

if (!isset($_SESSION["usuario_id"])){
    header("Location: login.php");
    exit();
    
}
$nome = $_SESSION["usuario_nome"];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Painel Concef</title>
    </head>
    <body>
        <h1>Bem Vindo ao Painel! </h1>
        <p>Olá, <?php echo $_SESSION['usuario_nome']; ?></p>
        <p>selecione a opção desejada</p>
        <ul>
            <a href="cartas.php">Pedir uma Carta</a>
            <a href ="https://form.jotform.com/240185317468056">Solicitar Compra</a>
            <a href ="https://mangrove-deal-a21.notion.site/1a715dc1b4104f1d848ec6fbd43dcfdf?v=c2862351813c4e32b0ef037a27c87b7c&pvs=4">Controle de Cotações</a>
        </ul>
        <p> <a href="logout.php"> Sair</a></p>

        </body>
</html>